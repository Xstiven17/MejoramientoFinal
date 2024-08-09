<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
 
    public function up(): void
    {


        //Tabla proveedores
         Schema::create('proveedores', function (Blueprint $table) {
            $table->id();
            $table->string('nif');
            $table->string('nombre');
            $table->string('direccion');
            $table->timestamps();
        });

        //Tabla clientes
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('dni');
            $table->string('nombre');
            $table->string('apellido');
            $table->dateTime('fecha_nac');
            $table->string('telefono');
            $table->timestamps();
        });

        //Tabla productos
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('codigo');
            $table->string('nombre');
            $table->string('precio');
            $table->timestamps();
        });

         //Tabla cliente_producto
         Schema::create('cliente_producto', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cliente_id');
            $table->unsignedBigInteger('producto_id');
            $table->foreign('cliente_id')->references('id')->on('clientes')->onDelete('cascade');
            $table->foreign('producto_id')->references('id')->on('productos')->onDelete('cascade');

            $table->timestamps();
        });  
    }
   
    public function down(): void
    {
    Schema::dropIfExists('cliente_producto');
    Schema::dropIfExists('productos');
    Schema::dropIfExists('clientes');
    Schema::dropIfExists('proveedores');
    }
};
