<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>U-R-Ill</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="/css/urill.css" />
    </head>
    <body class="antialiased">
        <div class="container">
            <x-head></x-head>
            {{ $slot }}
        </div>
    </body>
</html>
