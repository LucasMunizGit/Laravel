<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            {{ config('app.name') }}
        </title>

        @vite('resources/css/app.css')
    </head>



    <body class="bg-[#FFEDD6]">
        {{-- HEADER --}}
        <x-header />
        
        {{-- CONTENT --}}
        {{ $slot }}

        {{-- FOOTER --}}
        <x-footer />

    </body>
</html>