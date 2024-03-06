<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trabajadore extends Model
{
    public $timestamps= false;
    use HasFactory;
    protected $fillable = [
        'nombre', 
        'apellidos', 
        'sexo', 
        'fecha_nacimiento', 
        'num_documento', 
        'direccion', '
        telefono', 
        'email', 
        'acceso', 
        'usuario', 
        'password'
    ];

    public function ventas()
    {
        return $this->hasMany(Venta::class);
    }
}
