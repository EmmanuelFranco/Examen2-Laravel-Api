<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use Illuminate\Http\Request;

class VentaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ventas = Venta::all();
        return response()->json($ventas);
    }

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
        $request->validate([
            'cliente_id' => 'required|exists:clientes,id',
            'trabajadores_id' => 'required|exists:trabajadores,id',
            'fecha' => 'required|date',
            'tipo_comprobante' => 'required|string',
            'serie' => 'required|string',
            'correlativo' => 'required|string',
            'igv' => 'required|string',
            'estado' => 'required|string',
        ]);

        $venta = Venta::create($request->all());
        return response()->json(['venta' => $venta]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $venta = Venta::findOrFail($id);
        return response()->json($venta);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Venta $venta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'cliente_id' => 'required|exists:clientes,id',
            'trabajadores_id' => 'required|exists:trabajadores,id',
            'fecha' => 'required|date',
            'tipo_comprobante' => 'required|string',
            'serie' => 'required|string',
            'correlativo' => 'required|string',
            'igv' => 'required|string',
            'estado' => 'required|string',
        ]);

        $venta = Venta::findOrFail($id);
        $venta->update($request->all());
        return response()->json(['venta' => $venta]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $venta = Venta::findOrFail($id);
        $venta->delete();
        return 'El registro se borró correctamente';
    }
}
