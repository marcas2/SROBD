<?php

namespace App\Http\Controllers;

use App\Models\srobd;
use App\Http\Requests\StoresrobdRequest;
use App\Http\Requests\UpdatesrobdRequest;

class SrobdController extends Controller
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
    public function store(StoresrobdRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(srobd $srobd)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(srobd $srobd)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatesrobdRequest $request, srobd $srobd)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(srobd $srobd)
    {
        //
    }
    public function maria()
    {
        echo "Empieza restauración de base de datos";
        exit;
    }
}
