@extends('layouts.app')

@section('content')
<div class="hero-section">
    <div class="hero-content">
        <div class="container mt-5">
            <h1>Crear Artículo</h1>

            {{-- Mostrar errores de validación --}}
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error) 
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {{-- Mostrar mensaje de éxito --}}
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }} 
                </div>
            @endif
            
            {{-- Formulario para crear el artículo --}}
            <form action="{{ url('articulos') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="titulo">Título</label>
                    <input type="text" class="form-control" id="titulo" name="titulo" value="{{ old('titulo') }}" required>
                </div>
                
                <div class="form-group">
                    <label for="cuerpo">Cuerpo del Artículo</label>
                    <textarea class="form-control" id="cuerpo" name="cuerpo" rows="5" required>{{ old('cuerpo') }}</textarea>
                </div>
                
                <button type="submit" class="btn btn-primary">Crear Artículo</button>
                
                <a href="/" class="btn btn-secondary">Volver</a>
            </form>
        </div>
        
        <div class="hero-image"></div>
    </div>
</div>
@endsection
