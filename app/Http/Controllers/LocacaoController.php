<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorelocacaoRequest;
use App\Http\Requests\UpdatelocacaoRequest;
use App\Models\locacao;

class LocacaoController extends Controller
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
     * @param  \App\Http\Requests\StorelocacaoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorelocacaoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\locacao  $locacao
     * @return \Illuminate\Http\Response
     */
    public function show(locacao $locacao)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\locacao  $locacao
     * @return \Illuminate\Http\Response
     */
    public function edit(locacao $locacao)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatelocacaoRequest  $request
     * @param  \App\Models\locacao  $locacao
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatelocacaoRequest $request, locacao $locacao)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\locacao  $locacao
     * @return \Illuminate\Http\Response
     */
    public function destroy(locacao $locacao)
    {
        //
    }
}
