<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href=" {{ asset('css/app.css') }} ">
    <title>Ciuf Ciuf</title>
</head>
<body>

<div class="header">
    <img src="{{ asset('img/logo.png') }}"  class="logo" alt="">
</div>

<div>Comunicación de servicio de los Ferrocarriles Españoles</div>

<a href="{{ route('trains')}}">Picchia qui</a>

<main>
     @yield('content')
</main>








<script src=" {{ asset('js/app.js') }} "></script>
</body>
</html>
