<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;


class ProductoController extends Controller
{

    public function index(){
        $productos = Producto::all();
        return view('Ventas12.index', compact('productos'));
    }


    public function create(){
        return view('Ventas12.create');
    }

    public function store(Request $request){
        $productos = new Producto();
        $productos->codigo = $request->codigo;
        $productos->nombre = $request->nombre;
        $productos->precio = $request->precio;
        $productos->save();

        return redirect()->route('ventas1.create');  ///
    }

    public function show($id){
        $productos = Producto::find($id);
        return view('Ventas12.show', compact('productos'));
    }

    public function edit($id){
        $productos = Producto::find($id);
        return view('Ventas12.edit', compact('productos'));
    }

    public function update(Request $request, Producto $productos)
    {
        $request->validate([
            'codigo' => 'required',
            'nombre' => 'required',
            'precio' => 'required',
        ]);

        $productos->update($request->all());
        return redirect()->route('ventas1.index');
    }

   public function destroy($id){

    $productos = Producto::findOrFail($id);
    $productos->delete();
    return redirect()->route('ventas1.index');
   }
}