@extends('layouts.app')

@section('content')

<div class="comic-section">

    <div class="container py-5 text-center">

        <div class="series">CURRENT SERIES</div>
    
        <div class="row justify-content-center align-items-start pb-5">
    
        @forelse ($comics as $index => $comic) 
        <div class="col-2 pb-4 comic-card">
            <a href="{{route('single-comic.show', $index)}}">

                <img class="comic-thumb" src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                <div class="pt-2 text-start">{{$comic['series']}}</div>
 
            </a>
        </div>
        @empty
    
            <p>Nothing to show here</p>
    
        @endforelse
    
        </div>
    
    </div>
    

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