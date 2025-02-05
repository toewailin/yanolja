<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Yanolja') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- style1 -->
        <link rel="stylesheet" href="{{ asset('css/style1.css') }}">

        <!-- swiper -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
        <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    </head>
    <body class="font-sans antialiased">
            @include('layouts.frontend.header')

            <!-- Page Content-->
            <div class="flex justify-center pc:justify-normal">
                <div class="absolute top-[126px] w-full max-w-mobile-size pc:top-[100px] pc:w-[unset] pc:min-w-pc-with-swiper-btn pc:max-w-[unset] pc:overflow-x-visible pcOver:w-full">
                    <main class="flex h-full w-full flex-col">
                        <div class="flex flex-grow flex-col items-center overflow-x-hidden rounded-t-[2.4rem] bg-static-white pt-4 shadow-2 pc:rounded-t-[0rem] pc:pt-0">
                            {{ $slot }}
                        </div>
                    </main>
                    @include('layouts.frontend.footer')
                </div>
            </div

    </body>
</html>
