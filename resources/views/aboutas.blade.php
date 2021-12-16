@extends('layouts.master')
@section('content')
<div class="hero-wrap hero-bread" style="background-image: url('images/bg_1.jpg');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="{{route('index')}}">Home</a></span> <span>About us</span></p>
                <h1 class="mb-0 bread">About us</h1>
            </div>
        </div>
    </div>
</div>
<section class="ftco-section ftco-no-pb ftco-no-pt bg-light shadow-lg">
    <div class="container">
        <div class="row">
            <div class="col-md-5 p-md-5 img img-2 d-flex  " style="background-image: url(images/about.jpg);">

            </div>
            <div class="col-md-7 py-5 wrap-about pb-md-5 ftco-animate">
                <div class="heading-section-bold mb-4 mt-md-5">
                    <div class="ml-md-0">
                        <h2 class="mb-4 bg-danger p-2 text-center text-white">Welcome to Sanco General Trading Limited</h2>
                    </div>
                </div>
                <div class="pb-md-5">
                    <p>
                        Senco General Trading Limited Produces highly Agricultural products as defined include those that undergo not only simple but even sophisticated
                        processes employing advanced technological means in packaging materials intended to process and prepare the products for the market
                    </p>
                    <p>
                        The major agricultural products can be broadly grouped into foods, fibers and raw materials
                        Such as Food classes include cereals (grains), vegetables and fruits.
                    </p>
                    <p><a href="#" class="btn btn-warning">Contact As  Now</a></p>
                    <div class="shadow-sm mt-5 bg-danger text-white p-2">
                        <p>
                            Contact This number  To Place An Order For Your Products

                        </p>
                        <h4 class="text-center shadow-lg font-weight-bolder bg-white"> 0553262955 </h4>
                        <p>
                            We Are Located At Asafaotse Djannie Street, Dzorwulu - Accra.
                        </p>
                        <p>
                            Post Office Box AN 300 Accra
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_3.jpg);">
    <div class="container">
        <div class="row justify-content-center py-5">
            <div class="col-md-10">
                <div class="row bg-white p-2">
                    <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <strong class="number text-danger" data-number="10000">0</strong>
                                <span class="text-warning">Happy Customers</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <strong class="number text-danger" data-number="100">0</strong>
                                <span class="text-warning">Branches</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <strong class="number text-danger" data-number="1000">0</strong>
                                <span class="text-warning">Partner</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <strong class="number text-danger" data-number="100">0</strong>
                                <span class="text-warning">Awards</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--  delivery -->
@include('layouts.delivery')
<!--  delivery -->

@endsection