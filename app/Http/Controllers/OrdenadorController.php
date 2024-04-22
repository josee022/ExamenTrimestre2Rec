<?php

namespace App\Http\Controllers;

use App\Models\Ordenador;
use Illuminate\Http\Request;

class OrdenadorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('ordenadores.index', [
            'ordenadores' => Ordenador::all(),
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ordenadores.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'marca' => 'required|max:255',
            'modelo' => 'required|max:255',
        ]);

        $ordenador = new Ordenador();
        $ordenador->titulo = $validated['titulo'];
        $ordenador->save();
        session()->flash('success', 'El ordenador se guardó correctamente.');
        return redirect()->route('ordenadores.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Ordenador $ordenador)
    {
        return view('ordenadores.show', [
            'ordenador' => $ordenador,
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ordenador $ordenador)
    {
        return view('ordenadores.edit', [
            'ordenador' => $ordenador,
        ]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ordenador $ordenador)
    {
        $validated = $request->validate([
            'marca' => 'required|max:255',
            'modelo' => 'required|max:255',
        ]);

        $ordenador->titulo = $validated['titulo'];
        $ordenador->save();
        session()->flash('success', 'El ordenador se guardó correctamente.');
        return redirect()->route('ordenadores.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ordenador $ordenador)
    {
        $ordenador->delete();
        session()->flash('success', 'El ordenador se ha eliminado correctamente.');
        return redirect()->route('ordenadores.index');
    }
}
