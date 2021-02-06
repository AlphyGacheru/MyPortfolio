<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
@yield('title')
   
<link rel="stylesheet" href="{{ secure_asset('css/style.css') }}">

</head>








<body>
    <nav id="navbar">
        <ul>
            <li><a href="{{ route('index') }}" class="{{ Request::routeIs('index') ? 'route-link' : ''}}">Home</a>
            </li>
            <li><a href="{{ route('my-work') }}" class="{{ Request::routeIs('my-wwork') ? 'route-link' : ''}}">My Work</a>
            </li>
            <li><a href="{{ route('contact') }}" class="{{ Request::routeIs('contact') ? 'route-link' : ''}}">Contact</a></li>

        </ul>

    </nav>

    @yield('header')
    <footer id="footer">
        <p> © 2021 Alphayo Gacheru </p>    
    </footer>

</body>
</html>