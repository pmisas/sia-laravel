@extends('layouts.plantilla')

@section('title', 'sia index'. $nick)

@section('content')
    <p>bienvenido {{$nick}} </p>
    <a href="{{route('edit')}}">Cambiar Contraseña</a>
    <a href="{{route('logout')}}">
    <button type="button">Salir</button></a>
@endsection
