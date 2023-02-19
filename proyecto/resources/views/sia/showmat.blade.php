@extends('layouts.plantilla')

@section('title', 'sia showmat'. $nick . $materia)

@section('content')
    <p>bienvenido {{$nick}}, esta materia se llama: {{$materia}}</p>
@endsection
