<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
    <div class="section font-semibold px-16 text-gray-800 fixed w-full top-0 flex header_section bg-gray-100 shadow z-10">
        <div class="sub_head flex my-auto py-3">
          <div class="logo w-14"><img class="w-full" src="https://cdn-icons-png.flaticon.com/512/8280/8280802.png" alt="" /></div>
          <div class="text ml-2 my-auto flex-none">Foodie</div>
        </div>
        <div class="sub_head ml-auto flex space-x-8 my-auto">
          
          <div  class="h_btns cursor-pointer"><a href="#menu">Produits</a></div>
          <div class="h_btns cursor-pointer">Nous</div>
          <div class="h_btns cursor-pointer">Contact</div>
        </div>
      </div>
      @yield('content')
      </body>
</html>
