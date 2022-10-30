@extends('layouts.app')


@section('content')

    <div class="Appcontainer overflow-auto">



        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner pt-4" style="background-image: url(images/bg_1.jpg); height:700px">
              <div class="carousel-item active">
                <div class="overlay" style="position:absolute; background: rgb(0, 0, 0);">.</div>
                <div class="container">
                    <div class="row slider-text align-items-center" data-scrollax-parent="true">

                        <div class="col-md-6 col-sm-12 ftco-animate text-justify">

                                <h3 class="subheading text-primary" style="text-shadow: 0.2px 0.2px #000000;">Welcome</h3>
                            <h1 class="mb-4">We Make The best Pizzas in Nigeria </h1>
                            <p class="mb-4 mb-md-5 text-light">All Deliveries are also within an hour</p>
                            <p><a href="/pizzas/menu" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a> <a href="/pizzas/menu"
                                    class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View Menu</a></p>


                        </div>
                        <div class="col-md-6 ftco-animate mt-4 mb-4">
                            <img src="images/bg_1.webp" class="img-fluid" alt="">
                        </div>

                    </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row slider-text align-items-center" data-scrollax-parent="true">

                        <div class="col-md-6 col-sm-12 order-md-last ftco-animate text-justify">
                            <h3 class="subheading text-primary" style="text-shadow: 0.2px 0.2px #000000;">Welcome</h3>
                            <h1 class="mb-4">We Make The best Pizzas in Nigeria </h1>
                            <p class="mb-4 mb-md-5 text-light">All Deliveries are also within an hour</p>
                            <p><a href="/pizzas/menu" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a> <a href="/pizzas/menu"
                                    class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View Menu</a></p>
                        </div>
                        <div class="col-md-6 ftco-animate mt-4 mb-4">
                            <img src="images/bg_2.webp" class="img-fluid" alt="">
                        </div>

                    </div>
                </div>
              </div>

            </div>

          </div>

    <div class="ftco-intro">
        <div class="container-wrap">
            <div class="wrap d-md-flex">
                <div class="info">
                    <div class="row no-gutters">
                        <div class="col-md-4 d-flex ftco-animate">
                            <div class="icon"><span class="icon-phone"></span></div>
                            <div class="text">
                                <h3>000 (123) 456 7890</h3>
                                <p>A small river named Duden flows</p>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex ftco-animate">
                            <div class="icon"><span class="icon-my_location"></span></div>
                            <div class="text">
                                <h3>198 West 21th Street</h3>
                                <p>Suite 721 New York NY 10016</p>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex ftco-animate">
                            <div class="icon"><span class="icon-clock-o"></span></div>
                            <div class="text">
                                <h3>Open Monday-Friday</h3>
                                <p>8:00am - 9:00pm</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="social d-md-flex pl-md-5 p-4 align-items-center">
                    <ul class="social-icon">
                        <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="ftco-about d-md-flex">
        <div class="one-half img" style="background-image: url(images/about.jpg);"></div>
        <div class="one-half ftco-animate">
            <div class="heading-section ftco-animate ">
                <h2 class="mb-4">Welcome to <span class="flaticon-pizza">Pizza</span> A Restaurant</h2>
            </div>
            <div>
                <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have
                    been rewritten a thousand times and everything that was left from its origin would be the word "and" and
                    the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said
                    could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her
                    drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>
            </div>
        </div>
    </div>

    <div class="ftco-section ftco-services">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <h2 class="mb-4">Our Services</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live
                        the blind texts.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 ftco-animate">
                    <div class="media d-block text-center block-6 services">
                        <div class="icon d-flex justify-content-center align-items-center mb-5">
                            <span class="flaticon-diet"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading">Healthy Foods</h3>
                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                                unorthographic.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate">
                    <div class="media d-block text-center block-6 services">
                        <div class="icon d-flex justify-content-center align-items-center mb-5">
                            <span class="flaticon-bicycle"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading">Fastest Delivery</h3>
                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                                unorthographic.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate">
                    <div class="media d-block text-center block-6 services">
                        <div class="icon d-flex justify-content-center align-items-center mb-5"><span
                                class="flaticon-pizza-1"></span></div>
                        <div class="media-body">
                            <h3 class="heading">Original Recipes</h3>
                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                                unorthographic.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="ftco-gallery">
        <div class="container-wrap">
            <div class="row no-gutters">
                <div class="col-md-3 ftco-animate">
                    <a href="#" class="gallery img d-flex align-items-center"
                        style="background-image: url(images/gallery-1.jpg);">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-search"></span>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 ftco-animate">
                    <a href="#" class="gallery img d-flex align-items-center"
                        style="background-image: url(images/gallery-2.jpg);">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-search"></span>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 ftco-animate">
                    <a href="#" class="gallery img d-flex align-items-center"
                        style="background-image: url(images/gallery-3.jpg);">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-search"></span>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 ftco-animate">
                    <a href="#" class="gallery img d-flex align-items-center"
                        style="background-image: url(images/gallery-4.jpg);">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-search"></span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>


    <div class="ftco-counter ftco-bg-dark img" id="section-counter" style="background-image: url(images/bg_2.jpg);"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="row">
                        <div classpublic function cart()
                        {
                            return view('pizzas.cart');
                        }="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <div class="icon"><span class="flaticon-pizza-1"></span></div>
                                    <strong class="number" data-number="100">0</strong>
                                    <span>Pizza Branches</span>
                                </div>
                            </div>
                        </div>public function cart()
                        {
                            return view('pizzas.cart');
                        }
                        <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <div class="icon"><span class="flaticon-medal"></span></div>
                                    <strong class="number" data-number="85">0</strong>
                                    <span>Number of Awards</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <div class="icon"><span class="flaticon-laugh"></span></div>
                                    <strong class="number" data-number="10567">0</strong>
                                    <span>Happy Customer</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <div class="icon"><span class="flaticon-chef"></span></div>
                                    <strong class="number" data-number="900">0</strong>
                                    <span>Staff</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>






    <div class="ftco-appointment" id="contact">
        <div class="overlay"></div>
        <div class="container-wrap">
            <div class="row no-gutters d-md-flex align-items-center">
                <div class="col-md-6 d-flex align-self-stretch">
                    <div id="map"></div>
                </div>
                <div class="col-md-6 appointment ftco-animate">
                    <h3 class="mb-3">Contact Us</h3>
                    <form action="#" class="appointment-form">
                        <div class="d-md-flex">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="First Name">
                            </div>
                        </div>
                        <div class="d-me-flex">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Last Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea name="" id="" cols="30" rows="3" class="form-control"
                                placeholder="Message"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Send" class="btn btn-primary py-3 px-4">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <p class="mssg">{{ session('mssg') }}</p>
    </div>

@endsection
