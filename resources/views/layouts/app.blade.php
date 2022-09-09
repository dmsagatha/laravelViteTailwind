<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}
    <title>{{ $title ?? 'Laravel 9 Vite 3 With Tailwind CSS' }}</title>
    
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

    @vite(['resources/js/app.js'])

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
  </head>
  <body class="antialiased">
    <div class="flex justify-center items-center h-screen">
      <h1 class="text-3xl text-purple-600 font-bold">
        Laravel 9 Vite with <a href="https://tailwindcss.com/">Tailwind CSS!</a>
        <i class="fas fa-camera fa-2x pl-3"></i>
      </h1>
    </div>
  </body>
</html>