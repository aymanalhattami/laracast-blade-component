<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="{{ asset('css/tailwind.css') }}">
        <script src="{{ asset('js/alpine.js') }}"></script>
        {{-- <script
            src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.3.0/alpine.js"
            integrity="sha512-nIwdJlD5/vHj23CbO2iHCXtsqzdTTx3e3uAmpTm4x2Y8xCIFyWu4cSIV8GaGe2UNVq86/1h9EgUZy7tn243qdA=="
            crossorigin="anonymous">
        </script> --}}
    </head>
    <body>
        @include('partials.header')
        {{ $slot }}
    </body>
</html>
