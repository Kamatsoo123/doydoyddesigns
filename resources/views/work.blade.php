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
            <h1>Work</h1>
            <div class="stack stack--sm cta-block">
                <p> Workworkworkworkworkwork.</p>
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