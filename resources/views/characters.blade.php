@extends('layouts.app')

@section('content')

<div class="comic-section">

    Characters
    

</div>

<div class="dc-links py-4">

    <div class="container">

        <div class="row justify-content-center align-items-center">

            <div class="col-2">

                <img class="product_img me-2" src="{{asset('img/buy-comics-digital-comics.png')}}" alt="">
                DIGITAL COMICS

            </div>

            <div class="col-2">

                <img class="product_img me-2" src="{{asset('img/buy-comics-merchandise.png')}}" alt="">
                SHOP DC
            </div>

            <div class="col-2">

                <img class="product_img me-2 shop" src="{{asset('img/buy-comics-shop-locator.png')}}" alt="">
                COMIC SHOP LOCATOR
            </div>

            <div class="col-2">

                <img class="product_img me-2" src="{{asset('img/buy-comics-subscriptions.png')}}" alt="">
                SUBSCRIPTION
            </div>

        </div>

    </div>

</div>

@endsection