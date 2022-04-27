@extends('layouts.app')

@section('content')

    <section class="home-slider owl-carousel img" style="background-image: url({{ asset('images/bg_1.jpg') }});">

        <div class="slider-item" style="background-image: url({{ asset('images/bg_3.jpg') }});">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center">

                    <div class="col-md-7 col-sm-12 text-center ftco-animate">
                        <h1 class="mb-3 mt-5 bread">Our Menu</h1>
                        <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Menu</span></p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <h2 class="mb-4">Our Menu</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live
                        the blind texts.</p>
                </div>
            </div>
        </div>
        <div class="container-wrap">
            <div class="row no-gutters d-flex">


                @foreach ($pizza as $i)
                    <div class="col-lg-4 d-flex ftco-animate mb-2">
                        <div class="services-wrap d-flex">
                            <a href="#" class="img" style="background-image: url({{ url('storage/images/'.$i->image) }});"></a>
                            <div class="text p-4">
                                <h3>{{$i->pizza_name}}</h3>
                                <p>{{$i->pizza_description}}</p>
                                <p class="price"><span>NGN {{$i->price}}</span> <a href="{{ route('add.to.cart', $i->id) }}"
                                        class="ml-2 btn btn-white btn-outline-white">Add to cart</a></p>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>


    </section>



@endsection
