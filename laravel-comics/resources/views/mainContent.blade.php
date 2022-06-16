@extends('layouts.app')

@section('content')

<div class="comic-section">

    <div class="container py-5 text-center">

        <div class="series">CURRENT SERIES</div>
    
        <div class="row justify-content-center align-items-start pb-5">
    
        @forelse ($comics as $comic) 
    
            
            <div class="col-2 pb-4 comic-card">
    
                <img class="comic-thumb" src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                <div class="pt-2 text-start">{{$comic['title']}}</div>
    
            </div>
    
    
            
    
        @empty
    
            <p>Nothing to show here</p>
    
        @endforelse
    
        </div>

        <a class="load-btn" href="">LOAD MORE</a>
    
    </div>
    

</div>

<div class="dc-links py-4">

    <div class="container">

        <div class="row justify-content-center align-items-center">

            <div class="col-2">

                <img class="product_img" src="{{asset('img/buy-comics-digital-comics.png')}}" alt="">

            </div>

            <div class="col-2">

                <img class="product_img" src="{{asset('img/buy-comics-digital-comics.png')}}" alt="">

            </div>

            <div class="col-2">

                <img class="product_img" src="{{asset('img/buy-comics-digital-comics.png')}}" alt="">

            </div>

            <div class="col-2">

                <img class="product_img" src="{{asset('img/buy-comics-digital-comics.png')}}" alt="">

            </div>

            <div class="col-2">

                <img class="product_img" src="{{asset('img/buy-comics-digital-comics.png')}}" alt="">

            </div>

        </div>

    </div>

</div>

@endsection