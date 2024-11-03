@extends('layouts.app')

@section('content')
<div class="hero-section">
    <div class="hero-content">

    <h1>Lista de Usuarios</h1>
    <ul>
        @foreach ($usuarios as $usuario)
            <li class="lindex">{{ $usuario }}</li>
        @endforeach
    </ul>
    <a href="/" class="btn btn-secondary">Volver</a>

    </div>

    
    <div class="hero-image"></div>
</div>
@endsection
