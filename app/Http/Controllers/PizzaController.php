<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Allpizza;
use App\Models\Order;

class PizzaController extends Controller
{
    public function index(){
        //$pizzas=Pizza::all();
        $pizzas=Allpizza::latest()->get();

        return view('pizzas.index',[
            'pizzas'=> $pizzas
        ]);
    }

    public function about()
    {
        return view('pizzas.about');
    }

    public function cart()
    {
        return view('pizzas.cart');
    }

    public function addToCart($id)
    {
        $product = Allpizza::findOrFail($id);

        $cart = session()->get('cart', []);

        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name" => $product->pizza_name,
                "quantity" => 1,
                "price" => $product->price,
                "image" => $product->image
            ];
        }

        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function update(Request $request)
    {
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
        }
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function remove(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
        }
    }

    public function checkout()
    {
        return view('pizzas.checkout');
    }


    public function show($id){

        $pizza=Allpizza::findOrFail($id);

        return view('pizzas.show', ['pizza' => $pizza]);
    }

    public function create(){
        return view('pizzas.create');
    }


    public function menu(){

        //!!! to display your images dont forget to type php artisan storage:link,
        //it makes it possible to access your storage folder from your root public folder

        $pizza = Allpizza::latest()->get();

        return view('pizzas.menu', [
            'pizza' => $pizza
        ]);
    }


    public function store(Request $request){


        $image = $request->file('image');
        $image_name = $image->getClientOriginalName();

        $path = $image->storeAs('public/images', $image_name);

        $pizza = new Allpizza();

        $pizza->pizza_name = request('pizza_name');
        $pizza->pizza_description = request('pizza_description');
        $pizza->image = $image_name;
        $pizza->price = request('price');

        $pizza->save();

        return redirect('/') ->with('mssg', 'successful');
    }

    public function destroy($id)
    {
        $pizza = Allpizza::findOrFail($id);
        $pizza -> delete();

        return redirect('/pizzas');
    }


    public function verify($ref)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.paystack.co/transaction/verify/".rawurlencode($ref),
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "Authorization: Bearer ".env('PAYSTACK_SECRET_KEY'),
                "Cache-Control: no-cache",
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {

            $result = json_decode($response);
            if ($result->data->status == 'success') {
                $status = $result->data->status;
                $cart = json_encode($result->data->metadata->custom_filters->cart_items);
                $name = $result->data->metadata->custom_filters->first_name . $result->data->metadata->custom_filters->last_name;
                $email = $result->data->customer->email;
                $city = $result->data->metadata->custom_filters->city;
                $state = $result->data->metadata->custom_filters->state;
                $zip = $result->data->metadata->custom_filters->zip;
                $address = $result->data->metadata->custom_filters->address;
                $ref = $result->data->reference;

                $order = new Order();

                $order->name = $name;
                $order->email = $email;
                $order->city = $city;
                $order->state = $state;
                $order->zip = $zip;
                $order->address = $address;
                $order->ref = $ref;
                $order->cart_items = $cart;

                $order->save();

                return redirect('/') ->with('ordered', 'Order Successful, We will deliver soon, check your email for the full details');

            }
            else {
                return 'wahala dey ooo';
            }
        }
    }
}
