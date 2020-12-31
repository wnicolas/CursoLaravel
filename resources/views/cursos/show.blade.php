@extends('layouts.plantilla')
@section("title","Curso " . $nombre)

@section("content")
    <h1>Bienvenidos al curso: {{$nombre}} </h1>
@endsection