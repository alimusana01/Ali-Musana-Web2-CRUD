<?php

namespace App\Http\Controllers;

use App\Mahasiswa;
use App\User;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    
    public function index()
        { 
            $mahasiswa = Mahasiswa::with(['user'])->get(); // select * from nama_tabel
            return view('mahasiswa.index', compact('mahasiswa'));
        }

    public function create()
        {
            $user = User::all('name','id');
            return view('mahasiswa.create', compact('user'));
        }

    public function simpan(request $request)
        {
            Mahasiswa::create($request->all());
            alert()->success('Sukses','Data Berhasil Disimpan');
            return redirect()->route('mahasiswa');
        }

    public function edit($id)
        {
            $mahasiswa = Mahasiswa::find($id); // select * from nama_tabel where id = $id;
            return view('mahasiswa.edit', compact('mahasiswa'));
        }

    public function update(request $request, $id)
        {
            $mahasiswa = Mahasiswa::find($id);
            $mahasiswa->update($request->all());
            toast(' Berhasil Mengedit Data','success');
            return redirect()->route('mahasiswa');
        }

    public function hapus($id)
        {
            $mahasiswa = Mahasiswa::find($id);
            $mahasiswa->delete();
            toast(' Berhasil Menghapus Data','success');
            return redirect()->route('mahasiswa');
        }

}
