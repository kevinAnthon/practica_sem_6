<?php

namespace App\Http\Controllers;

use App\Model\Compradetalle;
use Illuminate\Http\Request;

class CompradetalleController extends Controller
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
        $Compradetalle = new Compradetalle();        
        $Compradetalle->idcompra=$request->idcom;
        $Compradetalle->idproducto=$request->idpro;
        $Compradetalle->descripcion=$request->desc;
        $Compradetalle->precio=$request->prec;
        $Compradetalle->cantidad=$request->cant;
        $Compradetalle->total=$request->tot;
        $Compradetalle-> save();
    }
    public function actualizar(Request $request)
    {
        $Compradetalle = Compradetalle::find($request->id);        
        $Compradetalle->idcompra=$request->idcom;
        $Compradetalle->idproducto=$request->idpro;
        $Compradetalle->descripcion=$request->desc;
        $Compradetalle->precio=$request->prec;
        $Compradetalle->cantidad=$request->cant;
        $Compradetalle->total=$request->tot;
        $Compradetalle-> save();
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
     * @param  \App\Compradetalle  $compradetalle
     * @return \Illuminate\Http\Response
     */
    public function show(Compradetalle $compradetalle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Compradetalle  $compradetalle
     * @return \Illuminate\Http\Response
     */
    public function edit(Compradetalle $compradetalle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Compradetalle  $compradetalle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Compradetalle $compradetalle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Compradetalle  $compradetalle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Compradetalle $compradetalle)
    {
        //
    }
}
