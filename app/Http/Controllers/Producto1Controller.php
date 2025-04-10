<?php

namespace App\Http\Controllers;

use App\Models\Producto1;
use Illuminate\Http\Request;

class Producto1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $producto1s=Producto1::all();
        $producto1s=Producto1::orderBy('nombre')->get();
        // return view('welcome',['producto1s' => $producto1s]);
        return view('productos.index',['producto1s' => $producto1s]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('productos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Producto1::create($request->all());
        //Guardar imagen
        $producto = Producto1::latest('id')->first();
        $imageName= 'producto_'.$producto->id.'.'.$request->imagen->extension();
        $request->imagen->move(public_path('images/productos'), $imageName);
        return redirect()->route('producto1s.index')->with('info', 'Producto creado con éxito');
        // return redirect()->route('productos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Producto1 $producto1)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Producto1 $producto1)
    {
        return view('productos.edit', compact('producto1'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Producto1 $producto1)
    {
        producto1::update($request->all());
        return redirect()->route('producto1s.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Producto1 $producto1)
    {
        $producto1->delete();
        return redirect()->route('producto1s.index')->with('info', 'producto eliminado con éxito');;

    }
}
