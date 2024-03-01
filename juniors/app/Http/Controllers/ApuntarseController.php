<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\InfoDinar;
use Illuminate\Http\Request;
use App\Http\Requests\StoreApuntarseRequest;
use App\Http\Requests\UpdateApuntarseRequest;
use App\Models\Apuntarse;

class ApuntarseController extends Controller
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
    public function store(Request $request)
    {
        //
        $a = new Apuntarse;
        $a->nom = $request->nom;
        $a->mail = $request->email;
        $control = $a->save();
        Mail::to($request->email)->send(new InfoDinar($request->nom));
        return $control;

    }

    /**
     * Display the specified resource.
     */
    public function show(Apuntarse $apuntarse)
    {
        //


    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Apuntarse $apuntarse)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateApuntarseRequest $request, Apuntarse $apuntarse)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Apuntarse $apuntarse)
    {
        //
    }
}
