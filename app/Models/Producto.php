<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $fillable = ['codigo', 'nombre', 'precio'];

    public function Clientes(){
        return $this->belongsToMany(Cliente::class);
    }

    public function Proveedores(){
        return $this->hasMany(Proveedor::class);
    }
}
