<div class="top-banner">

    <div class="container">

        <div class="row justify-content-end text-end py-1 text-white">

            <div class="col-2">DC POWER&#8480; VISA&#9415;</div>
            <div class="col-2 ps-3">ADDITIONAL DC SITES <i class="fa-solid fa-caret-down"></i></div>

        </div>

    </div>

</div>

<nav>

    <div class="container py-3">

        <div class="row align-items-center justify-content-between">

            <div class="col">

                <a href="{{route('home')}}"><img class="logo" src="{{asset('img/dc-logo.png')}}" alt=""></a>
                

            </div>

            <div class="col d-flex align-items-center nav-links">

                <a class="me-4 {{Route::currentRouteName() === 'characters' ? 'text-primary' : ''}}" href="{{route('characters')}}">CHARACTERS</a>
                <a class="me-4 {{Route::currentRouteName() === 'comics' ? 'text-primary' : ''}}" href="{{route('comics')}}">COMICS</a>
                <a class="me-4 {{Route::currentRouteName() === 'movies' ? 'text-primary' : ''}}" href="{{route('movies')}}">MOVIES</a>
                <a class="me-4 {{Route::currentRouteName() === 'tv' ? 'text-primary' : ''}}" href="{{route('tv')}}">TV</a>
                <a class="me-4 {{Route::currentRouteName() === 'games' ? 'text-primary' : ''}}" href="{{route('games')}}">GAMES</a>
                <a class="me-4 {{Route::currentRouteName() === 'collectibles' ? 'text-primary' : ''}}" href="{{route('collectibles')}}">COLLECTIBLES</a>
                <a class="me-4 {{Route::currentRouteName() === 'video' ? 'text-primary' : ''}}" href="{{route('videos')}}">VIDEOS</a>
                <a class="me-4 {{Route::currentRouteName() === 'fans' ? 'text-primary' : ''}}" href="{{route('fans')}}">FANS</a>
                <a class="me-4 {{Route::currentRouteName() === 'news' ? 'text-primary' : ''}}" href="{{route('news')}}">NEWS</a>
                <a class="{{Route::currentRouteName() === 'shop' ? 'text-primary' : ''}}" href="{{route('shop')}}">SHOP</a>

            </div>

            <div class="col">

                <div class="searchbar">
                    <input type="search" name="" id="" placeholder="Search">
                    <i class="fa-solid fa-magnifying-glass"></i> 
                </div>
            
            </div>
            

        </div>

        

    </div>

</nav>

<div class="jumbo">



</div>