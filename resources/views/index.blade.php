<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ env('APP_NAME') }}</title>

    </head>
    <body id="app">
        <example-component></example-component>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>