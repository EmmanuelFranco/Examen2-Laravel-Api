<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    public $timestamps= false;
    use HasFactory;

    protected $fillable = [
        'nombre', 
        'apellido', 
        'sexo', 
        'fecha_nacimiento', 
        'tipo_documento', 
        'num_documento', 
        'direccion', 
        'telefono', 
        'email'
    ];
    public function ventas()
    {
        return $this->hasMany(Venta::class);
    }
}