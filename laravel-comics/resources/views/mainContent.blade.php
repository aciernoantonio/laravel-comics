@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-center align-items-start">

    @forelse ($comics as $comic) 

        
        <div class="col-2 pb-4 comic-card">

            <img class="img-fluid" src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
            <div class="pt-2">{{$comic['title']}}</div>

        </div>


        

    @empty

        <p>Nothing to show here</p>

    @endforelse

    </div>

</div>
@endsection