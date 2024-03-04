<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detalle_Venta extends Model
{
    public $timestamps= false;
    use HasFactory;
    protected $fillable = [
        'ventas_id',
        'detalle_ingresos_id',
        'cantidad', 
        'precio_venta', 
        'descuento'
    ];
    public function venta()
    {
        return $this->belongsTo(Venta::class, 'ventas_id');
    }

    public function detalleIngreso()
    {
        return $this->belongsTo(Detalle_Ingreso::class, 'detalle_ingresos_id');
    }
}
