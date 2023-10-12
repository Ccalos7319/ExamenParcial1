<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    
    public function index()
    {
        $usuario = new Usuario();
        return $usuario->all(); 
    }


    public function create(Request $request)
    {


        $usuario = new Usuario();

        $usuario->nombre = $request->nombre;
        $usuario->apellido = $request->apellido;
        $usuario->correo = $request->correo;
        $usuario->fecha_registro = $request->fecha_registro;

        $usuario->save();
        return $usuario;
    }

    public function show($id)
    {
        $usuario = new Usuario();
        return $usuario->find($id);
    }

    public function update($id, Request $request)
    {
        $usuario = Usuario::find($id);

        $usuario->nombre = $request->nombre;
        $usuario->apellido = $request->apellido;
        $usuario->correo = $request->correo;
        $usuario->fecha_registro = $request->fecha_registro;
       
        $usuario->save();
        return $usuario;
    }

    public function destroy($id)
    {
        $usuario = Usuario::find($id);
        $usuario->delete();
        return $usuario;
    }
}
