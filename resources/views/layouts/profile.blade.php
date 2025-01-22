<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=egde">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token()}}">

    <title>@yield('title')</title>

    <script src="{{ asset('js/app.js')}}" defer></script>

    <link rel="dns-prefetch" href="http://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/profile.css')}}">
</head>
  <body>
    <div id='app'>
        <nav class="navbar navbar-extenf-md navbar-dark navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/')}}">
                    {{ config('app.name','laravel')}}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggle-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul calss="navbar-nav ms-auto">

                    </ul>

                    <ul class="navbar-nav">
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
  </body>
</html>