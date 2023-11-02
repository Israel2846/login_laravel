<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ url('http://192.168.41.101/login_laravel/public/assets/css/bootstrap.min.css') }}">

    <title>Aplicación de login</title>
</head>

<body>
    @include('layouts.partials.navbar')
    
    <main class="container">
        @yield('content')
    </main>

    <script src="http://192.168.41.101/login_laravel/public/assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>
