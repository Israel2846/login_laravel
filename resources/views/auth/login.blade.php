<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>

<body>
    <form action="{{ route('login.show') }}" method="post">
        @csrf
        <label>
            <p>Username / Email</p>
            <input type="text" name="username">
        </label>

        <label>
            <p>Password</p>
            <input type="password" name="password">
        </label>
        
        <button type="submit">Ingresar</button>
    </form>
</body>

</html>