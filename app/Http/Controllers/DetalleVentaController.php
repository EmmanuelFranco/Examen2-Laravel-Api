<?php

namespace App\Http\Controllers;

use App\Models\Detalle_Venta;

use Illuminate\Http\Request;

class DetalleVentaController extends Controller
{
   /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $detalles_ventas = Detalle_Venta::all();
        return response()->json([ 'Detalles_ventas' => $detalles_ventas]);     }

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
        $detalles_ventas = Detalle_Venta::create($request->all());
        return response()->json(['Detalle_ventas: ' => $detalles_ventas]);
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        $detalles_ventas = Detalle_Venta::findOrFail($id);
        return response()->json(['Detalles_Ventas:' => $detalles_ventas]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Detalle_Venta $detalles_Ventas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $detalles_ventas = Detalle_Venta::findOrFail($id);
        $detalles_ventas->update($request->all());
        return response()->json(['detalles_ventas: ' => $detalles_ventas]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $detalles_ventas = Detalle_Venta::findOrFail($id);
        $detalles_ventas->delete();
        return response()->json(['message' => 'detalles_ventas eliminado correctamente']);
    }
}