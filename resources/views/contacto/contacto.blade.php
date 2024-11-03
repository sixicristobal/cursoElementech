<!-- resources/views/contacto.blade.php -->

@extends('layouts.app')

@section('content')
<div class="hero-section">
        <div class="hero-content">
            <h1>Formulario de Contacto</h1>

            
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('contacto.submit') }}" method="POST">
                @csrf
                <div class="form-group contacto">
                    <label for="nombre">Nombre *</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre') }}" required>
                </div>

                <div class="form-group contacto">
                    <label for="email">Email *</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
                </div>

                <div class="form-group contacto">
                    <label for="direccion">Dirección</label>
                    <input type="text" class="form-control" id="direccion" name="direccion" value="{{ old('direccion') }}">
                </div>

                <div class="form-group contacto">
                    <label for="telefono">Teléfono (+5959xx-xxx-xxx) *</label>
                    <input type="text" class="form-control" id="telefono" name="telefono" value="{{ old('telefono') }}" required>
                </div>

                <button type="submit" class="btn btn-outline-dark">Enviar</button>
            </form>
        
            <div class="hero-image"></div>       
        
            <a href="/" class="btn btn-secondary">Volver</a>
        </div>
</div>
@endsection
