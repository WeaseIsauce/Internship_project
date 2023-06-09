<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Analog') }}</title>


    <script src="{{ asset('js/app.js') }}" defer></script>


    <link rel="dns-prefetch" href="/https://media.discordapp.net/attachments/711757209889144865/1115309768756699166/analog2.png">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/css/sb-admin-2.min.css') }}" rel="stylesheet">
    
</head>
<body>
    <div id="app">
        
        <main>
            @yield('content')
        </main>
    </div>
</body>
</html>
