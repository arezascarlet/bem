<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon" />
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon" />
    @stack('css')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased bg-background text-body min-h-dvh " id="app">
    <!-- Page Content -->
    <main>
        {{ $slot }}
    </main>
    @if (session()->has('toastMessage'))
    <div class="fixed bottom-4 right-4">
        <x-alert variant="{{ session('toastType') }}" close="true">{{ session('toastMessage') }}</x-alert>
    </div>
    @endif
    <script>
        document.addEventListener('alpine:init', () => {

        });
    </script>
    @stack('js')

</body>

</html>