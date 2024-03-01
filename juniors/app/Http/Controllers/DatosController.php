<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDatosRequest;
use App\Http\Requests\UpdateDatosRequest;
use App\Models\Datos;

class DatosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDatosRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Datos $datos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Datos $datos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDatosRequest $request, Datos $datos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Datos $datos)
    {
        //
    }
}
