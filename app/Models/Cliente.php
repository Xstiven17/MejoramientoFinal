<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

     protected $fillable = ['dni', 'nombre', 'apellido', 'fecha_nac', 'telefono'];

    public function Produtos(){
        return $this->belongsToMany(Producto::class);
    }
}
