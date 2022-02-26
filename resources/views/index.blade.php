<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">

        <title>{{ env('APP_NAME') }}</title>

    </head>
    <body id="app">
        @include('includes.navbar')
        <router-link to='/test'>test</router-link>
        @auth
            <div class="container">
                <h2>Welcome, {{ auth()->user()->name }}</h2>
                <img src="{{ auth()->user()->avatar }}" alt="" >
            </div>
        @endauth
        <router-view></router-view>
        {{-- <example-component></example-component> --}}
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
