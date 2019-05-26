@extends('layouts.layout')

@section('title','Inicio')

@section('contenido')
<div class="container">
  <div class="jumbotron">
    <h1 class="display-4">EL JUEGO DE LA HISTORIA</h1>
    <p class="lead">Un juego educativo para practicar contenidos teóricos de manera dinámica e innovadora.</p>
    <p>Registrate para empezar a jugar</p>
    <hr class="my-4">
    <a class="btn btn-primary btn-lg" href="/login" role="button">Iniciar Sesión</a>
    <a class="btn btn-primary btn-lg" href="/register" role="button">Registrarse</a>
  </div>
</div>
@endsection
