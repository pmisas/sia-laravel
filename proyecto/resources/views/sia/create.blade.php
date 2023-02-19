@extends('layouts.plantilla')

@section('title', 'sia create')

@section('content')
    <p>presente el examen para ser estudiante de la gloriosa universidad nacional xd
    </p>

    <br>
    <form action="{{route('register')}}" method="POST">

        @csrf

        <label>
            Name:
            <input type="text" name="name">
        </label>
        <br>
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
        <button type="submit">Enviar datos</button>
    </form>
@endsection
