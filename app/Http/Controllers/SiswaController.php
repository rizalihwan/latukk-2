<?php

namespace App\Http\Controllers;

use App\Siswa;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.siswa.index', [
            'siswas' => Siswa::get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
        Alert::success('Informasi Pesan', 'Siswa baru berhasil disimpan');
        return redirect()->route('admin.siswa.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $siswa = Siswa::findOrFail($id);
        return view('admin.siswa.edit', compact('siswa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $attr = $this->validate(request(),[
            'nis' => 'required|max:8|unique:siswas,nis,'.$id,
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
        Siswa::findOrFail($id)->update($attr);
        Alert::success('Informasi Pesan', 'Data Siswa berhasil di ubah');
        return redirect()->route('admin.siswa.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Siswa::findOrFail($id)->delete();
        Alert::success('Informasi Pesan', 'Siswa berhasil dihapus');
        return back();
    }
}
