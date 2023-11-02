@extends('layouts.auth-master')

@section('content')
    <form action="{{ route('register.store') }}" method="post">
        @csrf
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="username" placeholder="Nombre de usuario">
            <label class="form-label">Nombre de usuario</label>
        </div>

        <div class="form-floating mb-3">
            <input type="email" class="form-control" name="email" placeholder="Email">
            <label class="form-label">Email</label>
        </div>

        <div class="form-floating mb-3">
            <input type="password" class="form-control" name="password" placeholder="Password">
            <label class="form-label">Password</label>
        </div>

        <div class="form-floating mb-3">
            <input type="password" class="form-control" name="password_confirmation" placeholder="Confirmación de password">
            <label class="form-label">Password confirmation</label>
        </div>

        <div class="mb-3">
            <a href="{{ route('login.show') }}">Iniciar sesión</a>
        </div>

        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
@endsection
