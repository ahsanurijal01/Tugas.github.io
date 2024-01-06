<?php

namespace App\Http\Controllers;

use App\Models\mahasiswa;
use App\Models\mahasiswaModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class mahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Halaman Home mahasiswa
        $jumlah_halaman = 2;
        $mahasiswa = mahasiswaModel::orderBy('npm', 'asc')->paginate(3);
        $no = 1;
        return view('index', compact('mahasiswa', 'no'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Halaman Tambah mahasiswa
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Simpan tambah mahasiswa

        Session::flash('npm', $request->npm);
        Session::flash('nama_mahasiswa', $request->nama_mahasiswa);
        Session::flash('tgl_lahir', $request->tgl_lahir);
        Session::flash('alamat', $request->alamat);

        $request->validate(
            [
                'npm' => 'required|numeric|unique:mahasiswa,npm',
                'nama_mahasiswa' => 'required',
                'jk' => 'required',
                'tgl_lahir' => 'required',
                'alamat' => 'required'
            ],
            [
                'npm.required' => 'NPM tidak boleh kosong!',
                'npm.numeric' => 'NPM harus diisi dalam bentuk angka',
                'npm.unique' => 'NPM sudah ada sebelumnya',
                'nama_mahasiswa.required' => 'Nama Mahasiswa tidak boleh kosong!',
                'jk.required' => 'Jenis Kelamin tidak boleh kosong!',
                'tgl_lahir.required' => 'Tanggal Lahir tidak boleh kosong!',
                'alamat.required' => 'Alamat tidak boleh kosong!'
            ]
        );

        $data = [
            'npm' => $request->npm,
            'nama_mahasiswa' => $request->nama_mahasiswa,
            'jk' => $request->jk,
            'tgl_lahir' => $request->tgl_lahir,
            'alamat' => $request->alamat
        ];
        mahasiswaModel::create($data);
        return redirect('/mahasiswa')->with('success', 'Data Berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //Halaman Detail
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //Halaman Edit mahasiswa
        $data = mahasiswaModel::where('id',$id)->first();
        return view('edit',compact('data'));

        $request->validate(
            [
                'npm' => 'required|numeric|unique:mahasiswa,npm',
                'nama_mahasiswa' => 'required',
                'jk' => 'required',
                'tgl_lahir' => 'required',
                'alamat' => 'required'
            ],
            [
                'npm.required' => 'NPM tidak boleh kosong!',
                'npm.numeric' => 'NPM harus diisi dalam bentuk angka',
                'npm.unique' => 'NPM sudah ada sebelumnya',
                'nama_mahasiswa.required' => 'Nama Mahasiswa tidak boleh kosong!',
                'jk.required' => 'Jenis Kelamin tidak boleh kosong!',
                'tgl_lahir.required' => 'Tanggal Lahir tidak boleh kosong!',
                'alamat.required' => 'Alamat tidak boleh kosong!'
            ]
        );
        $data = [
            'npm'               => $request->npm,
            'nama_mahasiswa'    => $request->nama_mahasiswa,
            'jk'                => $request->jk,
            'tgl_lahir'         => $request->tgl_lahir,
            'alamat'            => $request->alamat
        ];
        mahasiswaModel::where('id', $id);
        return redirect('/mahasiswa')->with('success', 'Data Berhasil diedit!');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //Simpan edit mahasiswa
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //Hapus mahasiswa
    }
}
