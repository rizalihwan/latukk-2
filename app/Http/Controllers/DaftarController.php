<?php

namespace App\Http\Controllers;
use PDF;
use App\Siswa;

class DaftarController extends Controller
{
    public function index()
    {
        return view('daftar', [
            'siswas' => Siswa::get()
        ]);
    }

    public function store()
    {
        $attr = $this->validate(request(),[
            'nis' => 'required|unique:siswas,nis|max:10',
            'nama' => 'required',
            'alamat' => 'required',
            'jk' => 'required',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required',
            'asal_sekolah' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required'
        ], [
            'nis.unique' => 'Nis sudah terdaftar!'
        ]);
        Siswa::create($attr);
        toast('Berhasil Daftar','success');
        return back();
    }

    public function pdf($id)
    {
        $siswa = Siswa::findOrFail($id);
        $pdf = PDF::loadview('pdf_siswa', ['siswa' => $siswa]);
    	return $pdf->stream();
    }
}
