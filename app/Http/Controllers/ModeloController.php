<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoremodeloRequest;
use App\Http\Requests\UpdatemodeloRequest;
use App\Models\modelo;

class ModeloController extends Controller
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
     * @param  \App\Http\Requests\StoremodeloRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoremodeloRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\modelo  $modelo
     * @return \Illuminate\Http\Response
     */
    public function show(modelo $modelo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\modelo  $modelo
     * @return \Illuminate\Http\Response
     */
    public function edit(modelo $modelo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatemodeloRequest  $request
     * @param  \App\Models\modelo  $modelo
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatemodeloRequest $request, modelo $modelo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\modelo  $modelo
     * @return \Illuminate\Http\Response
     */
    public function destroy(modelo $modelo)
    {
        //
    }
}
