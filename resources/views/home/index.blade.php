@extends('layouts.app-master')

@section('content')
    <h1>Home</h1>
    
    @auth
        <p>Bienvenido {{ auth()->user()->name ?? auth()->user()->username }}, estás autenticado a la pagina</p>
        {{-- <p>Bienvenido {{ $username }}, estás autenticado a la pagina</p> --}}
        <p>
            <a href="{{ route('logout') }}">Logout</a>
        </p>
    @endauth

    @guest
        <p>Para ver el contenido inicia sesión <a href="{{ route('login.show') }}">Iniciar sesión</a></p>
    @endguest
@endsection
