@extends('layouts.auth-master')

@section('content')
    <form action="{{ route('login.show') }}" method="post">
        @csrf
        <div class="mb-3">
            <label class="form-label">Username / Email address</label>
            <input type="text" class="form-control" name="username">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>

        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" name="password">
        </div>

        <div class="mb-3">
            <a href="{{ route('register.show') }}">Create account</a>
        </div>
        
        <button type="submit" class="btn btn-primary">Iniciar sesión</button>
    </form>
@endsection
