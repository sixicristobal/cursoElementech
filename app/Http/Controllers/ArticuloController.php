<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articulo;

class ArticuloController extends Controller
{
    public function create()
    {
        return view('articulos.crearArticulos');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|min:5|max:100',
            'cuerpo' => 'required|string|min:50',
        ], [
            'titulo.required' => 'El campo título es obligatorio.',
            'titulo.min' => 'El título debe tener al menos 5 caracteres.',
            'titulo.max' => 'El título no puede superar los 100 caracteres.',
            'cuerpo.required' => 'El campo cuerpo es obligatorio.',
            'cuerpo.min' => 'El cuerpo debe tener al menos 50 caracteres.',
        ]);
    
        Articulo::create([
            'titulo' => $request->titulo,
            'cuerpo' => $request->cuerpo,
        ]);
    
        return redirect('/articulos')->with('success', 'Creado correctamente');
    }
    

}
