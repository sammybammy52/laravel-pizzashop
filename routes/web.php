<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PizzaController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pizzas', [PizzaController::class, 'index']);

Route::get('/pizzas/create', [PizzaController::class, 'create']);

Route::get('/pizzas/menu', [PizzaController::class, 'menu']);

Route::post('/pizzas', [PizzaController::class, 'store']);

Route::get('/pizzas/{id}', [PizzaController::class, 'show']);

Route::delete('/pizzas/{id}', [PizzaController::class, 'destroy']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//cart routes
Route::get('cart', [PizzaController::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id}', [PizzaController::class, 'addToCart'])->name('add.to.cart');
Route::patch('update-cart', [PizzaController::class, 'update'])->name('update.cart');
Route::delete('remove-from-cart', [PizzaController::class, 'remove'])->name('remove.from.cart');

Route::get('checkout', [PizzaController::class, 'checkout'])->name('checkout');

//verify payments

Route::get('/verify/{ref}', [PizzaController::class, 'verify']);
