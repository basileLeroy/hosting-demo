<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        {{-- Meta --}}
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Basile & Code</title>

        {{-- Favicon --}}
        <link rel="shortcut icon" href="{{asset("icons/favicon.png")}}" type="image/x-icon">

        <!-- Fonts -->        
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        {{-- Styling --}}
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>
    <body>
        <div id="App">
            <div id="botActive">
                <h1>Active</h1>
            </div>
            <div id="logo">
                <div id="wave"></div>
            </div>
            <div id="version">
                <p>v.2.0.0</p>
            </div>
        </div>
    </body>
</html>
