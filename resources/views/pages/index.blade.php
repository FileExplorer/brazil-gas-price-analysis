@extends('layout.layout')
@section('content')

    <!-- heading -->
    <header class="heading">
        <h1 id="title">SEPTA</h1>
        <a href="#" class="getStarted">Get Started</a>
    </header>

    <!-- home cards -->
    <section class="homeCards">
        <div class="img" style="background-image: url('/images/rail.jpg');">
            <a href="#">Rail Lines</a>
        </div>

        <div class="img" style="background-image: url('/images/lines.jpg');">
            <a href="#">Train Lines</a>
        </div>

        <div class="img" style="background-image: url('/images/bus.jpg');">
            <a href="#">Buses</a>
        </div>

        <div class="img" style="background-image: url('/images/cct.jpg');">
            <a href="#">CCT Connect</a>
        </div>
    </section>
    
    <!-- About -->
    <header class="test">HELLO</header>
@endsection