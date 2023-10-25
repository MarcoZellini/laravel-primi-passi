<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link rel="stylesheet" href="{{ url('/css/app.css') }}">
</head>

<body>
    <header>
        <nav>
            <div class="nav-logo">
                <h2>LOGO</h2>
            </div>
            <ul class="nav-links">
                <li class="nav-link"><a href=" {{ route('home') }}">Home</a></li>
                <li class="nav-link"><a href="{{ route('about') }}">About</a></li>
                <li class="nav-link"><a href="{{ route('contacts') }}">Contacts</a></li>
            </ul>
        </nav>
    </header>

    <div class="container">
        <h1>{{$title}}</h1>
        <p>{{$paragraph}}</p>
    </div>
</body>

</html>