<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\DokumenKonsultasi;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
<<<<<<< HEAD
use Illuminate\Support\Facades\Auth;
=======
>>>>>>> origin/master
use Illuminate\Support\Facades\File; 

class DokumenKonsultasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
<<<<<<< HEAD
        $dokumen = DokumenKonsultasi::where('user_id', Auth::user()->id)->get(['id', 'nama_dokumen', 'prioritas']);

        return response()->json([
            'status' => 'success',
            'data' => $dokumen
        ]);
=======
        //
        $dokumen = DokumenKonsultasi::all();
        return response()->json($dokumen);
>>>>>>> origin/master
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
<<<<<<< HEAD
=======
            'user_id' => 'required',
>>>>>>> origin/master
            'nama_dokumen' => 'required',
            'file_dokumen' => 'required|mimes:doc,docx,pdf,txt|max:2048',
            'prioritas' => 'required',
            'pesan' => 'required',
        ]);

        try {
            $dokumen = new DokumenKonsultasi();
<<<<<<< HEAD
            $dokumen->user_id = Auth::user()->id;
=======
            $dokumen->user_id = $request->user_id;
>>>>>>> origin/master
            $dokumen->nama_dokumen = $request->nama_dokumen;
            $dokumen->prioritas = $request->prioritas;
            $dokumen->pesan = $request->pesan;
            
            $file_ext = $request->file_dokumen->extension();
            $file_name = 'users_'.$request->user_id.'_'.time().'.'.$file_ext;
            $path_dokumen = 'storage/documents/konsultasi/'. $file_name;
            $request->file_dokumen->storeAs('public/documents/konsultasi', $file_name);
            
            $dokumen->file_dokumen = $path_dokumen;
            $dokumen->save();

            if(!$dokumen) {
                return response()->json(['success' => false, 'message' => 'Dokumen gagal ditambahkan']);
            }

            return response()->json([
                'success' => true, 
                'message' => 'Dokumen berhasil ditambahkan',
                'data' => [
                    'nama_dokumen' => $dokumen->nama_dokumen,
                    'prioritas' => $dokumen->prioritas,
                    'pesan' => $dokumen->pesan,
                ]
            ]);

        } catch (QueryException $e) {
            if($e->errorInfo[1] == 1062) {
                
                return response()->json(['success' => false, 'message' => 'Dokumen gagal ditambahkan, ID sudah ada']);
    
            } else {
                throw $e;
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DokumenKonsultasi  $dokumenKonsultasi
     * @return \Illuminate\Http\Response
     */
    public function show(DokumenKonsultasi $dokumenKonsultasi)
    {
        //
        $dokumen = DokumenKonsultasi::find($dokumenKonsultasi->id);
        return response()->json($dokumen);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DokumenKonsultasi  $dokumenKonsultasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DokumenKonsultasi $dokumenKonsultasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DokumenKonsultasi  $dokumenKonsultasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(DokumenKonsultasi $dokumenKonsultasi)
    {
        //
        $dokumen = DokumenKonsultasi::find($dokumenKonsultasi->id);
        
        if(File::exists($dokumen->file_dokumen)) {
            File::delete(public_path($dokumen->file_dokumen));
        }

        $dokumen->delete();
        return response()->json([
            'success' => true, 
            'message' => 'Dokumen berhasil dihapus'
        ]);
    }
}
