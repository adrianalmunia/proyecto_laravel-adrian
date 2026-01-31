<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{

    public function index()
    {
        $alumnos = Alumno::paginate(5);
        return view('alumnos.index', compact('alumnos'));
    }

    public function create()
    {
        return view('alumnos.create');
    }


    public function store(Request $request)
    {
        // Validamos usando los archivos de traducción por defecto de Laravel
        $request->validate([
            'nombre' => 'required|string|min:3|max:255',
            'apellido' => 'required|string|max:255',
            'email' => 'required|email|unique:alumnos,email',
            'edad' => 'required|integer|min:1|max:120',
        ]);

        Alumno::create($request->all());

        return redirect()->route('alumnos.index')
            ->with('success', __('messages.success_create'));
    }

    public function edit(Alumno $alumno)
    {
        return view('alumnos.edit', compact('alumno'));
    }


    public function update(Request $request, Alumno $alumno)
    {
        $request->validate([
            'nombre' => 'required|string|min:3|max:255',
            'apellido' => 'required|string|max:255',
            'email' => 'required|email|unique:alumnos,email,' . $alumno->id,
            'edad' => 'required|integer|min:1|max:120',
        ]);

        $alumno->update($request->all());

        return redirect()->route('alumnos.index')
            ->with('success', __('messages.success_update'));
    }

    public function destroy(Alumno $alumno)
    {
        $alumno->delete();

        // CORRECCIÓN: Usamos la clave de traducción para el borrado
        return redirect()->route('alumnos.index')
            ->with('success', __('messages.success_delete'));
    }
}
