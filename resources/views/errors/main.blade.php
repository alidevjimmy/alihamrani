<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ali Hamrani - Web Developer & Programmer</title>
    <link rel="shortcut icon" href="{{ asset('/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset("/css/main.css") }}">
    <link rel="stylesheet" href="{{ asset("/css/mobile.css") }}">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
</head>
<body>
<div class="splash row" style="margin: 0 !important;">
    <div class="loading" style="margin: auto">
        @yield('content')
    </div>
</div>

</body>
</html>
