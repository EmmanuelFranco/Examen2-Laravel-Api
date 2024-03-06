<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detalle_Ingreso extends Model
{
    public $timestamps= false;
    use HasFactory;

    protected $table='detalle_ingresos';
    
    protected $fillable = [
        'articulos_id',
        'precio_compra', 
        'precio_venta', 
        'stock_inicial', 
        'stock_actual', 
        'fecha_produccion', 
        'fecha_vencimiento'
    ];

    public function articulo()
    {
        return $this->belongsTo(Articulo::class, 'articulos_id');
    }
}
