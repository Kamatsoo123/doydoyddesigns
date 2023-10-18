<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <nav class="nav">
            <a class="nav__item nav__item--brand-logo" href="{{ route('welcome') }}">Doydoy Designs</a>
            <a class="nav__item" href="{{ route('about') }}">About</a>
            <a class="nav__item" href="{{ route('work') }}">Work</a>
            <a class="nav__item" href="{{ route('contact') }}">Contact</a>
        </nav>
    </header>

    <section class="hero-section">
        <div class="hero-section__text stack stack--md">
            <h1>Where Design Meets Business</h1>
            <div class="stack stack--sm cta-block">
                <p>We are a cutting-edge design firm that takes your unique business requirements and transforms them into accessible modern designs. For over 20 years, we have worked with the best to make sure their customers are served with the finest designs in the world. Join us as we continue on our path of making products accessible to everyone.</p>
                <div class="cta">
                    <a href="#" class="cta-btn">Work with us</a>
                </div>
            </div>
        </div>
        <div class="hero-section__img">
            <img class="tilt-img" src="https://images.pexels.com/photos/1170412/pexels-photo-1170412.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="design business office">
        </div>
    </section>
</body>
</html>
