@extends('layouts.plantilla')

@section('title', 'sia {{$user->name}}' edit) 

@section('content')
    <p>Editar su usurio
    </p>

    <br>
    <form action="{{route('register')}}" method="POST">

        @csrf
        <label>
            password:
            <input type="text" name="password">
        </label>
        <br>
        <br>
        <button type="submit">actualizar datos</button>
    </form>
@endsection
