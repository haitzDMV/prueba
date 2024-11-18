<?php

namespace App\Http\Controllers;


use App\Models\Trabajador;
use Illuminate\Http\Request;
use App\Models\Tarea;

class TrabajadorController extends Controller
{
    public function index() {
        $trabajadores = Trabajador::all();
        return view('/trabajadores/index', compact('trabajadores'));
    }
    public function create() {
        return view('/trabajadores/create');
    }

    public function store(Request $request) {

        $validated = $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'dni' => 'required|unique:trabajadores'
        ]);

        $trabajador = new Trabajador();
        $trabajador->nombre = $request->nombre;
        $trabajador->apellido = $request->apellido;
        $trabajador->dni = $request->dni;
        $trabajador->save();

        return redirect('/trabajadores/index');
    }

    public function show($id) {
        $tareas = Tarea::where('trabajador_id', '=', $id)->get();
        $trabajador = Trabajador::find($id);
        return view('/trabajadores/show', compact('trabajador', 'tareas'));
    }
}