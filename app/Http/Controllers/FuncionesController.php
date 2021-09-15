<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Funciones;

class FuncionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function insertar(Request $request)
    {
        $Funciones = new Funciones();        
        $Funciones-> numero=$request->num;
        $Funciones-> nombre=$request->nomb;
        $Funciones-> apellido=$request->apell;
        $Funciones-> save();
    }
    public function actualizar(Request $request)
    {
        $Funciones = Funciones::find($request->id);        
        $Funciones-> numero=$request->num;
        $Funciones-> nombre=$request->nomb;
        $Funciones-> apellido=$request->apell;
        $Funciones-> save();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Funciones  $funciones
     * @return \Illuminate\Http\Response
     */
    public function show(Funciones $funciones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Funciones  $funciones
     * @return \Illuminate\Http\Response
     */
    public function edit(Funciones $funciones)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Funciones  $funciones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Funciones $funciones)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Funciones  $funciones
     * @return \Illuminate\Http\Response
     */
    public function destroy(Funciones $funciones)
    {
        //
    }
}
