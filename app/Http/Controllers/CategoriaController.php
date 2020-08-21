<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
            
        $categorias = Categoria::orderBy('id','DESC')->get();
       
        return $categorias;
     
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //metodo para actualizar este es el modelo
        $categoria = new Categoria();
        $categoria->nombre = $request->nombre;
        $categoria->estado = '1';
        $categoria->save();
    }

  
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //metodo para actualizar este es el modelo
        $categoria = Categoria::findOrFail($request->id);
        $categoria->nombre = $request->nombre;
        $categoria->estado = '1';
        $categoria->save();
    }

    public function desactivar(Request $request)
    {
        //metodo para desactivar este es el modelo
        $categoria = Categoria::findOrFail($request->id);
        $categoria->estado = '0';
        $categoria->save();
    }

    public function activar(Request $request)
    {
          //metodo para activar este es el modelo
          $categoria = Categoria::findOrFail($request->id);
          $categoria->estado = '1';
          $categoria->save();
    }

}
