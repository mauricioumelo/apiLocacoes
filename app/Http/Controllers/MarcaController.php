<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoremarcaRequest;
use App\Http\Requests\UpdatemarcaRequest;
use App\Models\marca;

class MarcaController extends Controller
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
     * @param  \App\Http\Requests\StoremarcaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoremarcaRequest $request)
    {
        return "cheguei ate aqui(store)";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\marca  $marca
     * @return \Illuminate\Http\Response
     */
    public function show(marca $marca)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\marca  $marca
     * @return \Illuminate\Http\Response
     */
    public function edit(marca $marca)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatemarcaRequest  $request
     * @param  \App\Models\marca  $marca
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatemarcaRequest $request, marca $marca)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\marca  $marca
     * @return \Illuminate\Http\Response
     */
    public function destroy(marca $marca)
    {
        //
    }
}
