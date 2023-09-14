<?php

namespace App\Http\Controllers;

use App\Models\pesan;
use App\Models\mobil;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PesanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pesan = pesan::with('mobil')->get();
        $mobil = mobil::all();
        return view('pemesanan.index',compact('pesan','mobil'));
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
        $pesan = new pesan;
        $mobil = mobil::find($request->mobil_id);        

        $tanggal_mulai = Carbon::parse($request->tanggal_mulai);
        $tanggal_selesai = Carbon::parse($request->tanggal_selesai);
        $jumlahhari = $tanggal_mulai->diffInDays($tanggal_selesai);

        $pesan->mobil_id = $request->mobil_id;
        $pesan->$tanggal_mulai = $tanggal_mulai;
        $pesan->tanggal_selesai = $tanggal_selesai;
        $pesan->jumlahhari = $jumlahhari;

        dd($pesan);

        $pesan->totalharga = $pesan->jumlahhari * $mobil->tarif;

        $pesan->save();

        return redirect()->route('pemesanan.index')->with('success', 'Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pesan  $pesan
     * @return \Illuminate\Http\Response
     */
    public function show(pesan $pesan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pesan  $pesan
     * @return \Illuminate\Http\Response
     */
    public function edit(pesan $pesan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pesan  $pesan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pesan $pesan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pesan  $pesan
     * @return \Illuminate\Http\Response
     */
    public function destroy(pesan $pesan)
    {
        //
    }
}
