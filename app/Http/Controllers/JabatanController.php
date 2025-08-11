<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use Illuminate\Http\Request;

class JabatanController extends Controller
{
    public function index()
    {
        $jabatans = Jabatan::all();
        return view('jabatan.index', compact('jabatans'));
    }

    public function create()
    {
        return view('jabatan.create');
    }

    public function store(Request $request)
    {
        Jabatan::create([
            'nama_jabatan' => $request->nama_jabatan
        ]);
        return redirect()->route('jabatan.index');
    }

    public function edit(Jabatan $jabatan)
    {
        return view('jabatan.edit', compact('jabatan'));
    }

    public function update(Request $request, Jabatan $jabatan)
    {
        $jabatan->update([
            'nama_jabatan' => $request->nama_jabatan
        ]);
        return redirect()->route('jabatan.index');
    }

    public function destroy(Jabatan $jabatan)
    {
        $jabatan->delete();
        return redirect()->route('jabatan.index');
    }
}
