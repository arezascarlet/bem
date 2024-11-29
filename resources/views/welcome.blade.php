<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon" />
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased  min-h-dvh flex" id="app">
    <main class="flex-grow">
        <section class="bg-center bg-cover bg-blend-multiply bg-gray-700 h-full flex items-center justify-center"
            style="background-image:url('https://images.unsplash.com/photo-1451187580459-43490279c0fa?ixlib=rb-4.0.3&q=85&fm=jpg&crop=entropy&cs=srgb&w=1920')">
            <div class="py-8 px-4 mx-auto  max-w-screen-xl lg:py-16 lg:px-6">
                <div class="mx-auto max-w-screen-sm text-center text-white">
                    <h1 class="mb-4 text-7xl tracking-tight font-extrabold lg:text-9xl">503</h1>
                    <p class="mb-4 text-3xl tracking-tight font-bold ">Website
                        under development</p>
                    <p class="mb-4 text-lg font-light">We are hard working to finising
                        this website, if you need help please contact administrator. </p>
                </div>
            </div>
        </section>
    </main>
</body>

</html>