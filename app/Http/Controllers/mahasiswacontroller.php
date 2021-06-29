<?php

namespace App\Http\Controllers;

use App\Mahasiswa;
use Illuminate\Http\Request;

class mahasiswacontroller extends Controller
{
    
        public function index(){
            $mahasiswa = Mahasiswa::all(); //select * form nama_table
            return view ('mahasiswa.index', compact ('mahasiswa'));
        }
        public function create(){
            return "Hallo saya Create, Dari Mahasiswa Kontroller";
        }
}
