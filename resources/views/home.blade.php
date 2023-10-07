@extends('layouts.app')

@section('titulo', 'Página Principal')


@section('contenido')

    <x-listar-posts :posts="$posts" />



@endsection
