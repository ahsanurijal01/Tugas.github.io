<?php

namespace App\Http\Controllers;

use App\Models\mahasiswaModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class mahasiswacontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //halaman home
        $mahasiswa = mahasiswaModel ::orderBy('id' , 'asc')->get();
        return view('index') ->with('mahasiswa', $mahasiswa);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Halaman Tambah Mahasiswa

        return view('create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Proses simpan mahasiswa
        Session::flash('npm', $request->npm);

        $request->validate(
            [
                'npm' => 'required',
                'nama_mahasiswa' => 'required',
                'jk' => 'required',
                'tgl_lahir' => 'required',
                'alamat' => 'requred'

            ],
            [
                'npm.required' => 'NPM Tidak Boleh Kosong!',
                'nama_mahasiswa.required' => 'Nama Tidak Boleh Kosong!',
                'jk.required' => 'Jenis Kelamin Belum Dipilih!',
                'alamat.required' => 'Alamat TIdat Boleh Kosong!'
            ]
            );




        $data = [
            'npm'               => $request -> npm,
            'nama_mahasiswa'    => $request -> nama_mahasiswa,
            'jk'                => $request -> jk,
            'tgl_lahir'         => $request -> tgl_lahir,
            'alamat'            => $request -> alamat
            
        ];
        
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
