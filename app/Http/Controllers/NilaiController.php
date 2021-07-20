<?php

namespace App\Http\Controllers;

use App\Nilai;
use App\Mahasiswa;
use App\Makul;
use App\User;

use Illuminate\Http\Request;

class NilaiController extends Controller

{
    
    public function index()
    {
        $nilai = Nilai::with(['mahasiswa','makul'])->get();
        return view('nilai.index', compact ('nilai',));
    }

    public function create()
    {
        $makul = Makul::all();
        $mahasiswa = Mahasiswa::with(['user'])->get();
        return view('nilai.create', compact ('makul','mahasiswa')); 
    }

    public function store(Request $request)
    {
        Nilai::create($request->all());
        alert()->success('Sukses','Selamat Data Berhasil Disimpan.');
        return redirect()->route('nilai');
    }

    public function edit($id)
    {
        $user = User::all();
        $nilai = Nilai::find($id);
        $makul = Makul::all();
        $mahasiswa = Mahasiswa::with(['user'])->get();
        return view('nilai.edit', compact ('user', 'nilai','makul','mahasiswa'));
    }

    public function update(Request $request, $id)
    {
        $nilai = Nilai::find($id);
        $nilai->update($request->all());
        toast('Yuhuuu Berhasil Mengedit Data','success');
        return redirect()->route('nilai');
    }

    public function destroy($id)
    {
        $nilai = nilai::find($id);
        $nilai->delete();
        toast('Yuhuu Berhasil Menghapus Data','success');
        return redirect()->route('nilai');
    }
}

