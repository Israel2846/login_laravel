<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ url('http://192.168.41.101/login_laravel/public/assets/css/bootstrap.min.css') }}">

    <title>Aplicación de login</title>

    <style>
        body {
            width: 100%;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .form-container {
            width: 400px;
        }
    </style>
</head>

<body>
    <main class="form-container">
        @yield('content')
    </main>

    <script src="http://192.168.41.101/login_laravel/public/assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>
