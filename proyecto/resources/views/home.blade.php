@extends('layouts.plantilla')

@section('title', 'home')

@section('content')
    <h1>Esta es la pagina principal</h1>
    <h4>Iniciar sesion</h4>
    <br>
    <form action="{{route('login')}}" method="POST">

        @csrf
        <label>
            Email:
            <input type="text" name="email">
        </label>
        <br>
        <label>
            password:
            <input type="text" name="password">
        </label>
        <br>
        <br>
        <button type="submit">LogIn</button>
    </form>
    <br>
    <a href="{{route('sia.create')}}">Presentar examen</a>
    <br>
    <ul>
        @foreach ($carreras as $carrera)
            <li>
                {{$carrera->name}}
            </li>
        @endforeach
    </ul>

    {{$carreras->links()}}


@endsection
