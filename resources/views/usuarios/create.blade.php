@extends('layouts.app')

@section('content')
<div class="hero-section">
    <div class="hero-content">
        <h1>Crear Usuarios</h1>
        <div class="container mt-5">
            <h2 class="text-center">Formulario de Registro</h2>
            <form class="fondoForm">
                <div class="form-group">
                     <label for="nombre">Nombre</label>
                     <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese su nombre">
                </div>
                <div class="form-group">
                    <label for="apellido">Apellido</label>
                    <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Ingrese su apellido">
                </div>
                <div class="form-group">
                    <label for="correo">Correo Electrónico</label>
                    <input type="email" class="form-control" id="correo" name="correo" placeholder="Ingrese su correo electrónico">
                </div>
                <button type="submit" class="btn btn-primary">Registrar</button>
            </form>

            <a href="/" class="btn btn-secondary">Volver</a>

        </div>
        <div class="hero-image"></div>
    </div>
    @endsection