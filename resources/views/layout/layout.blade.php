<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{config('app.name', 'Septa')}}</title>
    </head>
    <body>
        <div class="container">
            <!-- Nav -->
            <nav class="navMain">
                <img src=logo.png alt="septa" class="logo">
                <ul class="main-menu">
                    <li><a href="#">About</a></li>
                    <li><a href="#">Gallery</a></li>
                    <li><a href="#">Resources</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
                <ul class="right-menu">
                    <li>
                        <a href="#"><i class="fas fa-search"></a>
                    </li>
                </ul>
            </nav>

            <!-- pages -->
            @yield('content')
        </div>


        {{-- <script src="{{ mix('js/jquery-3.5.1.min.js')}}"></script> --}}
        <script src="{{ mix('js/app.js')}}"></script>
    </body>
</html>
