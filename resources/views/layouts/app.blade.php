<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>DC Comics</title>

        <link rel="stylesheet" href="{{asset('css/app.css')}}">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- Styles -->
        <style>
            
        </style>

    </head>
    <body>

        <header class="site_header">
            @include('partials.header')
        </header>
        <!-- /.site_header -->

        <main class="site_main">
            @yield('content')
        </main>
        <!-- /.site_main -->
        
        <footer class="site_footer">

            @include('partials.footer')
        </footer>
        <!-- /.site_footer -->
        <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>