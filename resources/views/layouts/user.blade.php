<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/e6ac989c9a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>La Molisana - @yield('titolo')</title>
</head>
<body>
    @include('partials.header')
    @yield('main')
    @include('partials.footer')
</body>
</html>