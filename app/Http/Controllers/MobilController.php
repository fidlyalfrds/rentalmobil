<?php

namespace App\Http\Controllers;

use App\Models\mobil;
use App\Models\pesan;
use Illuminate\Http\Request;

class MobilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mobil = mobil::all();
        $pesan = pesan::all();
        return view('mobil.index', compact('mobil','pesan'));
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
        $mobil = new mobil;
        $mobil->merk = $request->merk;
        $mobil->model = $request->model;
        $mobil->platno = $request->platno;
        $mobil->tarif = $request->tarif;
        $mobil->status = $request->status;
        $mobil->save();
        return redirect()->route('mobil.index')->with('success', 'Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function show(mobil $mobil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function edit(mobil $mobil)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, mobil $mobil)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function destroy(mobil $mobil)
    {
        //
    }
}
