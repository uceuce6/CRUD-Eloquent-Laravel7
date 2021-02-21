<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\pegawai;

class PegawaiController extends Controller
{
    public function index()
    {
        $pegawai = pegawai::all();
        return view('pegawai', ['pegawai' => $pegawai]);
    }

    public function tambah()
    {

        return view('pegawai_tambah');
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'nip' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'unit_kerja_id' => 'required'
        ]);

        pegawai::create([
            'nip' => $request->nip,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'unit_kerja_id' => $request->unit_kerja_id
        ]);

        return redirect('/pegawai');
    }

    public function edit($id)
    {
        $pegawai = pegawai::find($id);
        return view('pegawai_edit', ['pegawai' => $pegawai]);
    }

    public function update($id, Request $request)
    {

        $this->validate($request, [
            'nip' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'unit_kerja_id' => 'required'

        ]);

        $pegawai = pegawai::find($id);
        $pegawai->nip = $request->nip;
        $pegawai->nama = $request->nama;
        $pegawai->alamat = $request->alamat;
        $pegawai->unit_kerja_id = $request->unit_kerja_id;

        $pegawai->save();

        return redirect('/pegawai');
    }

    public function delete($id)
    {
        $pegawai = pegawai::find($id);
        $pegawai->delete();
        // return redirect()->back(); --back() mengalihkan kehalam sebelumnya
        return redirect('/pegawai');
    }
}
