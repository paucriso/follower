<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcat icon" href="{{asset('storage/images/favicon.ico')}}">
        <title>@yield('title')</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body>
        @include('partials.header')
        @yield('content')
        @include('partials.footer')
    </body>

</html>
