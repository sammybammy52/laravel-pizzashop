@extends('layouts.app')

@section('content')
    <script src="https://js.paystack.co/v1/inline.js"></script>

    <div class="container mt-2">
        @php $total = 0 @endphp
        <div class="row">
            <div class="col-md-4 order-md-2 mb-4">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-muted">Your cart</span>
                    <span class="badge badge-secondary badge-pill">{{ count((array) session('cart')) }}</span>
                </h4>
                <ul class="list-group mb-3 text-light">

                    @if (session('cart'))
                        @foreach (session('cart') as $id => $details)
                            @php $total += $details['price'] * $details['quantity'] @endphp
                            <li class="list-group-item d-flex justify-content-between lh-condensed bg-transparent">
                                <div>
                                    <h6 class="my-0">{{ $details['name'] }}</h6>
                                    <small class="text-muted">Quantity: {{ $details['quantity'] }}</small>
                                </div>
                                <span class="">N {{ $details['price'] * $details['quantity']}}</span>
                            </li>
                        @endforeach
                    @endif
                    <li class="list-group-item d-flex justify-content-between bg-secondary">
                        <span style="color: white">Total (NGN)</span>
                        <strong>{{ $total }}</strong>
                    </li>
                </ul>

                <form class="card p-2">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Promo code">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-secondary">Redeem</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-8 order-md-1">
                <h4 class="mb-3">Billing address</h4>
                <form class="needs-validation" novalidate id="paymentForm">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName">First name</label>
                            <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                            <div class="invalid-feedback">
                                Valid first name is required.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lastName">Last name</label>
                            <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                            <div class="invalid-feedback">
                                Valid last name is required.
                            </div>
                        </div>
                    </div>



                    <div class="mb-3">
                        <label for="email">Email <span class="text-muted">(Optional)</span></label>
                        <input type="email" class="form-control" id="email-address" placeholder="you@example.com">
                        <div class="invalid-feedback">
                            Please enter a valid email address for shipping updates.
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="amount">Amount </label>
                        <input type="number" class="form-control" id="amount" value="{{ $total }}" readonly>

                    </div>



                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label for="City">City</label>
                            <input type="text" class="form-control" id="city" placeholder="" value="" required>
                            <div class="invalid-feedback">
                                This input is required.
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="State">State</label>
                            <input type="text" class="form-control" id="state" placeholder="" value="" required>
                            <div class="invalid-feedback">
                                This input is required.
                            </div>
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="zip">Zip</label>
                            <input type="text" class="form-control" id="zip" placeholder="" required>
                            <div class="invalid-feedback">
                                Zip code required.
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="address">Home Address</label>
                        <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
                        <div class="invalid-feedback">
                            Please enter your shipping address.
                        </div>
                    </div>




                    <hr class="mb-4">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="same-address">
                        <label class="custom-control-label" for="same-address">Shipping address is the same as my billing
                            address</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="save-info">
                        <label class="custom-control-label" for="save-info">Save this information for next time</label>
                    </div>
                    <hr class="mb-4">



                    <hr class="mb-4">
                    <button class="btn btn-primary btn-lg btn-block" type="submit" onclick="payWithPaystack()">Continue to checkout</button>
                </form>
            </div>
        </div>
        @php
            $cart_array = session('cart');
            $json_cart = json_encode($cart_array);
        @endphp
    </div>
    <script>
        const paymentForm = document.getElementById('paymentForm');
        paymentForm.addEventListener("submit", payWithPaystack, false);
        var cart_array = @php
            echo $json_cart;
        @endphp

        function payWithPaystack(e) {
            e.preventDefault();
            let handler = PaystackPop.setup({
                key: 'pk_test_825ec86cf1c76c265fa7d60737abbf0ce16cc16b', // Replace with your public key
                email: document.getElementById("email-address").value,
                amount: document.getElementById("amount").value * 100,

                metadata: {
  custom_filters:{
    cart_items: cart_array,
    first_name: document.getElementById("firstName").value,
    last_name: document.getElementById("lastName").value,
    city: document.getElementById("city").value,
    state: document.getElementById("state").value,
    zip: document.getElementById("zip").value,
    address: document.getElementById("address").value
  }
},
                ref: '' + Math.floor((Math.random() * 1000000000) +
                1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
                // label: "Optional string that replaces customer email"
                onClose: function() {
                    alert('Window closed.');
                },
                callback: function(response) {
                    let message = 'Payment complete! Reference: ' + response.reference;
                    alert(message);
                   window.location = "/verify/" + response.reference;
                }
            });
            handler.openIframe();
        }

    </script>

@endsection
