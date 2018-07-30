<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CyberFilm Cinema</title>
    <link rel="stylesheet" href="{{ asset('bower_components/bootstrap4/dist/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('bower_components/Font-Awesome/web-fonts-with-css/css/fontawesome-all.min.css') }}">
    <base href="{{ asset('/') }}" >
    <link rel="stylesheet" href="{{ asset('css/page/page.css') }}">
    <link rel="stylesheet" href="{{ asset('css/user/user.css') }}">
</head>

<body>
   @include('page.layout.navbar')

   @yield('content')

   @include('page.layout.footer')

    <script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('bower_components/bootstrap4/dist/js/bootstrap.min.js') }}"></script>

    @yield('script');
</body>

</html>
