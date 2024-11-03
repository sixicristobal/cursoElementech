@extends('layouts.app')

@section('content')
<div class="hero-section">
    <div class="hero-content">
        <h1>Bienvenido a Nuestra Aplicación</h1>
        <p>Gestiona tus usuarios de forma rápida y sencilla.</p>
        <a href="/usuarios" class="btn btn-primary">Explorar Usuarios</a>
        <a href="/usuarios/crear" class="btn btn-primary">Crear Usuarios</a>
        <a href="articulos/crearArticulos" class="btn btn-primary">Crear Articulo</a>
        
    </div>
    <div class="hero-image"></div>
</div>
@endsection
