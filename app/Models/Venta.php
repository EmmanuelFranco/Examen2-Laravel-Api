<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    public $timestamps= false;
    use HasFactory;

    protected $fillable = [
        'fecha',
         'tipo_comprobante', 
         'serie', 
         'correlativo', 
         'igv', 
         'estado'
    ];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    public function trabajador()
    {
        return $this->belongsTo(Trabajadore::class);
    }
}
