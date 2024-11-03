<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function showForm() {
       return view('contacto.contacto');
    }

    public function submitForm(Request $request) {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email',
            'telefono' => ['required', 'regex:/^\+5959\d{2}-\d{3}-\d{3}$/', ],

        ], [
            
            'nombre.required' => 'El nombre es obligatorio',
            'email.required' => 'El Correo es obligatorio',
            'telefono.required' => 'El telefono es obligatorio',
            'telefono.regex' => 'El telefono debe tener el formato de: +5959xx-xxx-xxx',
        ]);

        return redirect()->route('contacto.show')->with('success', 'Formulario enviado');
    }

}
