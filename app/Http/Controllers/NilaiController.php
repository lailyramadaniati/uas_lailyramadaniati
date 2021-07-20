<?php

namespace App\Http\Controllers;

use App\Mahasiswa;
use App\Makul;
use App\Nilai;
use App\User;
use Illuminate\Http\Request;
use alert;

class NilaiController extends Controller
{
    public function index()
    {
        $nilai = Nilai::with(['mahasiswa'])->get(); //relasi dengan table user
        return view('nilai.index', compact('nilai'));
    }

    public function create()
    {
        $mahasiswa = Mahasiswa::all();//menampilkan relasi dari table mahasiswa
        $makul     = Makul::all();//menampilkan relasi dari table user
        return view('nilai.create', compact('mahasiswa', 'makul'));
    }

    public function store(Request $request)
    {
        Nilai::create($request->all());

        alert()->success('Sukses','Data Berhasil Disimpan');
        return redirect()->route('nilai');
    }

    public function edit($id)
    {
        $mahasiswa = Mahasiswa::all();
        $makul     = Makul::all();
        $nilai     = Nilai::find($id); // select * from nama table where id =$id;
        return view('nilai.edit', compact('nilai','mahasiswa','makul'));
    }

    public function update(Request $request, $id)
    {
        $nilai = Nilai::find($id);
        $nilai ->update($request->all());
        toast('Yeay Berhasil Mengedit Data', 'success');
        return redirect()->route('nilai');
    }

    public function destroy($id)
    {
        $nilai = Nilai::find($id);
        $nilai->delete();
        toast('Yeay Berhasil Menghapus Data', 'success');
        return redirect()->route('nilai');
    }
}
