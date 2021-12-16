@extends('layouts.master')
@section('content')
    <style>
        a{
            text-decoration: none;
        }
    </style>
    <section id="home-section" class="hero">
        <div class="home-slider owl-carousel">
            <div class="slider-item" style="background-image: url(images/sli1.jpeg);">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row slider-text justify-content-center align-items-center" >
                        <div class="col-md-12 ftco-animate text-center">
                            <h1 class="mb-2 ">We serve Fresh Vegestables &amp; Fruits</h1>
                            <h2 class="subheading mb-4">We deliver organic vegetables &amp; fruits</h2>
                            <p><a href="images/sli1.jpeg" class="btn btn-warning">View Details</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-item" style="background-image: url(images/sli2.jpeg);">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row slider-text justify-content-center align-items-center">
                        <div class="col-sm-12 ftco-animate text-center">
                            <h1 class="mb-2">100% Fresh &amp; Organic Foods</h1>
                            <h2 class="subheading mb-4">We deliver organic vegetables &amp; fruits</h2>
                            <p><a href="images/sli2.jpeg" class="btn btn-warning">View Details</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-item" style="background-image: url(images/slid3.jpeg);">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row slider-text justify-content-center align-items-center" >
                        <div class="col-sm-12 ftco-animate text-center">
                            <h1 class="mb-2">100% Fresh &amp; Organic Foods</h1>
                            <h2 class="subheading mb-4">We deliver organic vegetables &amp; fruits</h2>
                            <p><a href="#" class="btn btn-warning">View Details</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-item" style="background-image: url(images/sheanut.jpg);">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row slider-text justify-content-center align-items-center" >
                        <div class="col-sm-12 ftco-animate text-center">
                            <h1 class="mb-2">100% Fresh &amp; Organic Foods</h1>
                            <h2 class="subheading mb-4">We deliver organic vegetables &amp; fruits</h2>
                            <p><a href="images/sheanut.jpg" class="btn btn-warning">View Details</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-item" style="background-image: url(images/slid4.jpeg);">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row slider-text justify-content-center align-items-center">
                        <div class="col-sm-12 ftco-animate text-center">
                            <h1 class="mb-2">100% Fresh &amp; Organic Foods</h1>
                            <h2 class="subheading mb-4">We deliver organic vegetables &amp; fruits</h2>
                            <p><a href="images/slid4.jpeg" class="btn btn-warning">View Details</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-item" style="background-image: url(images/cocoo.jpeg);">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row slider-text justify-content-center align-items-center">
                        <div class="col-sm-12 ftco-animate text-center">
                            <h1 class="mb-2">100% Fresh &amp; Organic Foods</h1>
                            <h2 class="subheading mb-4">We deliver organic vegetables &amp; fruits</h2>
                            <p><a href="images/cocoo.jpeg" class="btn btn-warning">View Details</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
 <!--  delivery -->
    @include('layouts.delivery')
 <!--  delivery -->
    <!-- product big headers colunms -->
    @include('slide')
    <!-- product main colunms display -->
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-3 pb-3">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <h2 class="mb-4">Our Products</h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="product">
                        <a href="#" class="img-prod " data-bs-toggle="modal"  data-bs-target="#staticBackdropcinamorn" ><img class="img-fluid w-100 h-100" src="images/cina3.jpg"></a>
                        <div class="text py-3 pb-4 px-3 text-center">
                            <h3><a href="#" data-bs-toggle="modal"  data-bs-target="#staticBackdropcinamorn">Cinamon</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="product">
                        <a href="#" class="img-prod" data-bs-toggle="modal"  data-bs-target="#staticBackdropapiseed"><img class="img-fluid w-100 h-100"  src="images/akpi.jpg"></a>
                        <div class="text py-3 pb-4 px-3 text-center">
                            <h3><a href="#" data-bs-toggle="modal"  data-bs-target="#staticBackdropapiseed">Akpi Seed</a></h3>
                        </div>

                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="product">
                        <a href="#" class="img-prod" data-bs-toggle="modal"  data-bs-target="#staticBackdropcashew"><img class="img-fluid w-100 h-100"  src="images/cash4.jpg"></a>
                        <div class="text py-3 pb-4 px-3 text-center">
                            <h3><a href="#" data-bs-toggle="modal"  data-bs-target="#staticBackdropcashew">Cashew Nuts</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="product">
                        <a href="#" class="img-prod" data-bs-toggle="modal"  data-bs-target="#staticBackdropcadamom" ><img class="img-fluid w-100 h-100" src="images/card.jpg"> </a>
                        <div class="text py-3 pb-4 px-3 text-center">
                            <h3><a href="#" data-bs-toggle="modal"  data-bs-target="#staticBackdropcadamom">cardamom</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="product">
                        <a href="#" class="img-prod" data-bs-toggle="modal"  data-bs-target="#staticBackdropclove" ><img class="img-fluid w-100 h-100" src="images/clove.jpg"></a>
                        <div class="text py-3 pb-4 px-3 text-center">
                            <h3><a href="#" data-bs-toggle="modal"  data-bs-target="#staticBackdropclove">Cloves</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="product">
                        <a href="#" class="img-prod"><img class="img-fluid w-100 h-100" data-bs-toggle="modal"  data-bs-target="#staticBackdropcocao" src="images/coco45.jpg"> </a>
                        <div class="text py-3 pb-4 px-3 text-center">
                            <h3><a href="#" data-bs-toggle="modal"  data-bs-target="#staticBackdropcocao">Cocoa Beans</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="product">
                        <a href="#" class="img-prod w-100 h-100" data-bs-toggle="modal"  data-bs-target="#staticBackdroppalm"><img class="img-fluid"  src="images/palm2.jpg"></a>
                        <div class="text py-3 pb-4 px-3 text-center">
                            <h3><a href="#" data-bs-toggle="modal"  data-bs-target="#staticBackdroppalm">Palm Nuts Oil</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="product">
                        <a href="#" class="img-prod" data-bs-toggle="modal"  data-bs-target="#staticBackdrophoney"><img class="img-fluid w-100 h-100"  src="images/honi.jpeg"
                                                          alt="Colorlib Template">
                            <div class="overlay"></div>
                        </a>
                        <div class="text py-3 pb-4 px-3 text-center">
                            <h3><a href="#" data-bs-toggle="modal"  data-bs-target="#staticBackdrophoney">Pure Honey</a></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="product">
                        <a href="#" class="img-prod" data-bs-toggle="modal"  data-bs-target="#staticBackdroptamarin"><img class="img-fluid w-100 h-100"  src="images/termseeed7.jpg"> </a>
                        <div class="text py-3 pb-4 px-3 text-center">
                            <h3><a href="#" data-bs-toggle="modal"  data-bs-target="#staticBackdroptamarin">Tamarind Seed</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="product">
                        <a href="#" class="img-prod" data-bs-toggle="modal"  data-bs-target="#staticBackdropmilet" ><img class="img-fluid w-100 h-100"  src="images/milet9.jpg"
                                                          alt="Colorlib Template">
                            <div class="overlay"></div>
                        </a>
                        <div class="text py-3 pb-4 px-3 text-center">
                            <h3><a href="#"  data-bs-toggle="modal"  data-bs-target="#staticBackdropmilet">Millets</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="product">
                        <a href="#" class="img-prod" data-bs-toggle="modal"  data-bs-target="#staticBackdropnutmeg"><img class="img-fluid w-100 h-100"  src="images/nutm.jpg"></a>
                        <div class="text py-3 pb-4 px-3 text-center">
                            <h3><a href="#" data-bs-toggle="modal"  data-bs-target="#staticBackdropnutmeg">Nut Meg</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="product">
                        <a href="#" class="img-prod" data-bs-toggle="modal"  data-bs-target="#staticBackdropredkidneybeans"><img class="img-fluid w-100 h-100"  src="images/redk7.jpg"></a>
                        <div class="text py-3 pb-4 px-3 text-center">
                            <h3><a href="#" data-bs-toggle="modal"  data-bs-target="#staticBackdropredkidneybeans">Red Kidney Beans</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="product">
                        <a href="#" class="img-prod" data-bs-toggle="modal"  data-bs-target="#staticBackdropmoringa"><img class="img-fluid w-100 h-100"  src="images/moringa.jpg"> </a>
                        <div class="text py-3 pb-4 px-3 text-center">
                            <h3><a href="#" data-bs-toggle="modal"  data-bs-target="#staticBackdropmoringa">Moringa</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="product">
                        <a href="#" class="img-prod"  data-bs-toggle="modal"  data-bs-target="#staticBackdroppeanut"><img class="img-fluid w-100 h-100" src="images/peant4.jpg"> </a>
                        <div class="text py-3 pb-4 px-3 text-center">
                            <h3><a href="#" data-bs-toggle="modal"  data-bs-target="#staticBackdroppeanut">Peanuts</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="product">
                        <a href="#" class="img-prod" data-bs-toggle="modal"  data-bs-target="#staticBackdropsheabeta" ><img class="img-fluid w-100 h-100" src="images/seab.jpg"></a>
                        <div class="text py-3 pb-4 px-3 text-center">
                            <h3><a href="#" data-bs-toggle="modal"  data-bs-target="#staticBackdropsheabeta">Shear Butter</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="product">
                        <a href="#" class="img-prod" data-bs-toggle="modal"  data-bs-target="#staticBackdropcoffee"><img class="img-fluid w-100 h-100"  src="images/cof.jpg"> </a>
                        <div class="text py-3 pb-4 px-3 text-center">
                            <h3><a href="#" data-bs-toggle="modal"  data-bs-target="#staticBackdropcoffee">Coffee Beans</a></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="product">
                        <a href="#" class="img-prod" data-bs-toggle="modal"  data-bs-target="#staticBackdropblackandwhite"><img class="img-fluid w-100 h-100"  src="images/bwpp.jpg"> </a>
                        <div class="text py-3 pb-4 px-3 text-center">
                            <h3 ><a href="#" data-bs-toggle="modal"  data-bs-target="#staticBackdropblackandwhite">Black And White Peper</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="product">
                        <a href="#" class="img-prod"  data-bs-toggle="modal"  data-bs-target="#staticBackdropsogum"><img class="img-fluid w-100 h-100" src="images/sugum90.jpg"> </a>
                        <div class="text py-3 pb-4 px-3 text-center">
                            <h3><a href="#" data-bs-toggle="modal"  data-bs-target="#staticBackdropsogum">sorghum Grains</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="product">
                        <a href="#" class="img-prod" data-bs-toggle="modal"  data-bs-target="#staticBackdropblackeyepeas"><img class="img-fluid w-100 h-100"  src="images/bleye.jpg"> </a>
                        <div class="text py-3 pb-4 px-3 text-center">
                            <h3><a href="#" data-bs-toggle="modal"  data-bs-target="#staticBackdropblackeyepeas">Black eye peas</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="product">
                        <a href="#" class="img-prod" data-bs-toggle="modal"  data-bs-target="#staticBackdropdryginger"><img class="img-fluid w-100 h-100"  src="images/ginger.jpg"></a>
                        <div class="text py-3 pb-4 px-3 text-center">
                            <h3><a href="#" data-bs-toggle="modal"  data-bs-target="#staticBackdropdryginger">dried split ginger of american standards</a></h3>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="product">
                        <a href="#" class="img-prod" data-bs-toggle="modal"  data-bs-target="#staticBackdropsoyabean"><img class="img-fluid w-100 h-100"  src="images/sben55.jpg"></a>
                        <div class="text py-3 pb-4 px-3 text-center">
                            <h3><a href="#"  data-bs-toggle="modal"  data-bs-target="#staticBackdropsoyabean">soya beans</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="product">
                        <a href="#" class="img-prod" data-bs-toggle="modal"  data-bs-target="#staticBackdropnbaw"><img class="img-fluid w-100 h-100"  src="images/bla and wit.jpg"></a>
                        <div class="text py-3 pb-4 px-3 text-center">
                            <h3><a href="#"  data-bs-toggle="modal"  data-bs-target="#staticBackdropnbaw">natural black and white sesame seeds</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="product">
                        <a href="#" class="img-prod" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><img class="img-fluid w-100 h-100" src="images/shern.jpg"></a>
                        <div class="text py-3 pb-4 px-3 text-center">
                            <h3><a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="text-decoration: none">shear nuts</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('modals.mbnw')
    @include('modals.purehoey')
    @include('modals.cocaob')
    @include('modals.reskedneybeans')
    @include('modals.coffee')
    @include('modals.blackandwhitepeper')
    @include('modals.sorgum')
    @include('modals.blackeyepeas')
    @include('modals.cino')
    @include('modals.soyabean')
    @include('modals.dreidginger')
    @include('modals.sheabeta')
    @include('modals.peanuts')
    @include('modals.moringo')
    @include('modals.nutmeg')
    @include('modals.millet')
    @include('modals.tamarine')
    @include('modals.palmnot')
    @include('modals.clove')
    @include('modals.cardamom')
    @include('modals.cashuw')
    @include('modals.apiseed')
    @include('modals.cinamorn')
    <section class="ftco-section img" style="background-image: url(images/bak2.jpg);">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-md-6 heading-section ftco-animate deal-of-the-day ftco-animate">
                    <span class="subheading font-weight-bold text-white">Best Price For You</span>
                    <h1 class="text-white">Deal of the day</h1>
                    <h2 class="text-white"><a href="" class="text-white">Pure Honey</a></h2>
                    <p><a href="{{route('about')}}" class="btn btn-warning">Contact As  Now</a></p>
                    <div id="timer" class="d-flex mt-5">
                        <div class="time text-danger" id="days"></div>
                        <div class="time pl-3 text-danger" id="hours"></div>
                        <div class="time pl-3 text-danger" id="minutes"></div>
                        <div class="time pl-3 text-danger" id="seconds"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  {{--@include('partners')--}}
@endsection