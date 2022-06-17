@extends('layouts.app')

@section('content')

<div class="comic-section bg-primary">

    <div class="container py-2 text-center position-relative">
    
        <div class="row justify-content-start align-items-start pb-5">
      
            <div class="col-2 pt-5 comic-card position-absolute bottom-50">

                <div class="position-relative">
                    <div class="position-absolute bg-banner px-1 left-0 start-0">COMIC BOOK</div>
                    <img class="img-fluid border border-white" src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                    <div class="position-absolute bg-banner w-100 bottom-0 text-center">VIEW GALLERY</div>
                </div>

            </div>
    
        </div>
    
    </div>
    

</div>

<div class="comic-info text-dark py-5">

    <div class="container">

        <div class="row justify-content-center align-items-center">

            <div class="col-9 flex-column">
                <h3 class="pb-3">{{$comic['title']}}</h3>

                <div class="row pb-3 text-white justify-content-center align-items-center">

                    <div class="col-9 border border-dark bg-light-green py-3">

                        <div class="row justify-content-between align-items-center">

                            <div class="col">
                                U.S. Price: <strong>{{$comic['price']}}</strong>
                            </div>

                            <div class="col text-end">AVIABLE</div>

                        </div>

                    </div>

                    <div class="col-3 border border-dark py-3 bg-light-green text-center">Check Aviability</div>

                </div>

                <p>{{$comic['description']}}</p>

            </div>

            <div class="col-3">
                <div class="text-end">ADVERTISEMENT</div>

                <img class="img-fluid" src="{{asset('img/adv.jpg')}}" alt="">

            </div>

        </div>

        

    </div>

    

</div>

<div class="comic-links py-4">

    <div class="container">

        <div class="row justify-content-center align-items-center">

            <div class="col flex-column">

                <h3 class="pb-4">Talent</h3>

                <div class="row py-3 border-top border-bottom justify-content-between aling-items-center">

                    <div class="col">Art by:</div>
                    <div class="col text-primary">
                        @foreach ($comic['artists'] as $artist)
                            {{$artist}},
                        @endforeach
                    </div>

                </div>

                <div class="row py-3 border-bottom justify-content-between aling-items-center">

                    <div class="col">Written by:</div>
                    <div class="col text-primary">
                        @foreach ($comic['writers'] as $writer)
                            {{$writer}},
                        @endforeach
                    </div>

                </div>

            </div>

            <div class="col">

                <h3 class="pb-4">Specs</h3>

                <div class="row py-3 border-top border-bottom justify-content-between aling-items-center">

                    <div class="col">Series:</div>
                    <div class="col text-primary">
                        {{$comic['series']}}
                    </div>

                </div>

                <div class="row py-3 border-bottom justify-content-between aling-items-center">

                    <div class="col">U.S. Price:</div>
                    <div class="col">
                        {{$comic['price']}}
                    </div>

                </div>

                <div class="row py-3 border-bottom justify-content-between aling-items-center">

                    <div class="col">On Sale Date:</div>
                    <div class="col">
                        {{$comic['sale_date']}}
                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

<div class="comic-shop border border-3">
    <div class="container ">
        <div class="row justify-content-center align-item-center ">
            <div class="col d-flex p-2 justify-content-between align-item-center border border-top-0">
                <span class="align-self-center">DIGITAL COMICS</span>
                <img src="{{asset('img/buy-comics-digital-comics.png')}}" alt="">
            </div>

            <div class="col d-flex p-2 justify-content-between align-item-center border border-top-0">
                <span class="align-self-center">SHOP DC</span>
                <img src="{{asset('img/buy-comics-merchandise.png')}}" alt="">
            </div>

            <div class="col d-flex p-2 justify-content-between align-item-center border border-top-0">
                <span class="align-self-center">SUBSCRIPTION</span>
                <img src="{{asset('img/buy-comics-subscriptions.png')}}" alt="">
            </div>

            <div class="col d-flex p-2 justify-content-between align-item-center border border-top-0">
                <span class="align-self-center">DC POWER VISA</span>
                <img src="{{asset('img/buy-dc-power-visa.svg')}}" alt="">
            </div>

            </div>
        </div>
    </div>
</div>

@endsection