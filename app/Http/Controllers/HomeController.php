<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use App\Models\Jabatan;

class HomeController extends Controller
{
    public function index()
    {
        $totalPegawai = Pegawai::count();
        $totalJabatan = Jabatan::count();

        return view('welcome', compact('totalPegawai', 'totalJabatan'));
    }
}

