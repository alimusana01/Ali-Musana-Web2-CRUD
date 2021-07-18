<?php

namespace App\Http\Controllers;

use App\mahasiswa;
use App\makul;
use App\nilai;
use Illuminate\Http\Request;
use alert;

class nilaicontroller extends Controller
{
    public function index()
            {
                
                $nilai = nilai::with(['mahasiswa','makul'])->get();
                
                return view('nilai.index', compact('nilai'));
            }

    public function create()
            {
                $mahasiswa = mahasiswa::all();
                $makul     = makul::all();
                return view('nilai.create', compact('mahasiswa', 'makul'));
            }

    public function store(Request $request)
            {
                nilai::create($request->all());
                alert()->success('Success','Data Berhasil Disimpan');
                return redirect()->route('nilai'); //cara baca setelah selesai tolong jalankan ke arah index(data mahasiswa)
            }

    public function edit($id)
            {
                $mahasiswa = mahasiswa::all();
                $makul = makul::all();
                $nilai = nilai::find($id); //select * from nama_table where id = $id;
                return view('nilai.edit', compact('nilai','mahasiswa', 'makul')); //Compact itu boleh 2
            }

    public function update(Request $request, $id)
            {
                $nilai = nilai::find($id);
                $nilai->update($request->all());
                toast('Berhasil Update Data','success');
                return redirect()->route('nilai');
            }

    public function destroy($id)
            {
                $nilai = nilai::find($id);
                $nilai->delete($id);
                toast('Berhasil Hapus Data','success');
                return redirect()->route('nilai');
            }

}