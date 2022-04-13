<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\DataDosen;
use Illuminate\Http\Request;

class DataDosenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return DataDosen::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'tipe' => 'required',
            'detail_dosen' => 'required',
            'nama_lengkap' => 'required',
            'no_hp' => 'required',
            'alamat' => 'required',
            'nidn' => 'required',
            'ktp' => 'required',
            'user_id' => 'required',
            //'kategori' => 'required',
        ]);
        return DataDosen::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DataDosen  $dataDosen
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return DataDosen::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DataDosen  $dataDosen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DataDosen $dataDosen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DataDosen  $dataDosen
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return DataDosen::destroy($id);
    }
}
