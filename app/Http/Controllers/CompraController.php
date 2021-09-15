<?php

namespace App\Http\Controllers;

use App\Model\Compra;
use Illuminate\Http\Request;

class CompraController extends Controller
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
        $compra = new Compra();        
        $compra->serie=$request->ser;
        $compra->numcorre=$request->numc;
        $compra->fec_rec=$request->fec;
        $compra->igv_total=$request->igv;
        $compra->sub_total=$request->sub;
        $compra->total=$request->tot;
        $compra-> save();
    }
    public function actualizar(Request $request)
    {
        $compra =Compra::find($request->id);        
        $compra->serie=$request->ser;
        $compra->numcorre=$request->numc;
        $compra->fec_rec=$request->fec;
        $compra->igv_total=$request->igv;
        $compra->sub_total=$request->sub;
        $compra->total=$request->tot;
        $compra-> save();
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
     * @param  \App\Compra  $compra
     * @return \Illuminate\Http\Response
     */
    public function show(Compra $compra)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Compra  $compra
     * @return \Illuminate\Http\Response
     */
    public function edit(Compra $compra)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Compra  $compra
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Compra $compra)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Compra  $compra
     * @return \Illuminate\Http\Response
     */
    public function destroy(Compra $compra)
    {
        //
    }
}
