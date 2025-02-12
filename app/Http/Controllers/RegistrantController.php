<?php

namespace App\Http\Controllers;

use App\Models\Registrant;
use App\Http\Requests\StoreRegistrantRequest;
use App\Http\Requests\UpdateRegistrantRequest;

class RegistrantController extends Controller
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
     * @param  \App\Http\Requests\StoreRegistrantRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRegistrantRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Registrant  $registrant
     * @return \Illuminate\Http\Response
     */
    public function show(Registrant $registrant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Registrant  $registrant
     * @return \Illuminate\Http\Response
     */
    public function edit(Registrant $registrant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRegistrantRequest  $request
     * @param  \App\Models\Registrant  $registrant
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRegistrantRequest $request, Registrant $registrant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Registrant  $registrant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Registrant $registrant)
    {
        //
    }
}
