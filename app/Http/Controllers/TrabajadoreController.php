<?php

namespace App\Http\Controllers;


use App\Models\Trabajadore;
use Illuminate\Http\Request;

class TrabajadoreController extends Controller
{
   /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trabajadores = Trabajadore::all();
        return response()->json([ 'trabajadores' => $trabajadores]);    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $trabajadores = Trabajadore::create($request->all());
        return response()->json(['Trabajador: ' => $trabajadores]);
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        $trabajador = Trabajadore::findOrFail($id);
        return response()->json(['Trabajador:' => $trabajador]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Trabajadore $trabajador)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $trabajador = Trabajadore::findOrFail($id);
        $trabajador->update($request->all());
        return response()->json(['Trabajador: ' => $trabajador]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $trabajador = Trabajadore::findOrFail($id);
        $trabajador->delete();
        return response()->json(['message' => 'Trabajador eliminado correctamente']);
    }
}