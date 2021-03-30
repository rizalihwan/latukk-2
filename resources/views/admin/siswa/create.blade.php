@extends('layouts.app')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between">
            <a href="{{ route('admin.siswa.index') }}" class="btn btn-danger"><i class="fa fa-arrow-left"></i></a>
            <h5>
                <u>Tambah Siswa Baru</u>
            </h5>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.siswa.store') }}" method="post">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nis">*NIS</label>
                                <input type="number" name="nis" id="nis" class="form-control @error('nis') is-invalid @enderror" required>
                                @error('nis')
                                    <div class="invalid-feedback">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nama">*Nama</label>
                                <input type="text" name="nama" id="nama" class="form-control @error('nama') is-invalid @enderror" required>
                                @error('nama')
                                    <div class="invalid-feedback">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="alamat">*Alamat</label>
                                <textarea name="alamat" id="alamat" class="form-control @error('alamat') is-invalid @enderror" required></textarea>
                                @error('alamat')
                                    <div class="invalid-feedback">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="jk">*Jenis Kelamin</label>
                                <select name="jk" id="jk" class="form-control custom-select" required>
                                    <option disabled selected>pilih jenis kelamin</option>
                                    <option value="0">Laki - laki</option>
                                    <option value="1">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tempat_lahir">*Tempat Lahir</label>
                                <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control @error('tempat_lahir') is-invalid @enderror" required>
                                @error('tempat_lahir')
                                    <div class="invalid-feedback">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tgl_lahir">*Tanggal Lahir</label>
                                <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control @error('tgl_lahir') is-invalid @enderror" required>
                                @error('tgl_lahir')
                                    <div class="invalid-feedback">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="asal_sekolah">*Asal Sekolah</label>
                                <input type="text" name="asal_sekolah" id="asal_sekolah" class="form-control @error('asal_sekolah') is-invalid @enderror" required>
                                @error('asal_sekolah')
                                    <div class="invalid-feedback">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="kelas">*Kelas</label>
                                <input type="text" name="kelas" id="kelas" class="form-control @error('kelas') is-invalid @enderror" required>
                                @error('kelas')
                                    <div class="invalid-feedback">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="jurusan">*Jurusan</label>
                                <select name="jurusan" id="jurusan" class="form-control custom-select" required>
                                    <option disabled selected>pilih jurusan</option>
                                    <option value="RPL">RPL</option>
                                    <option value="TKJ">TKJ</option>
                                    <option value="MMD">MMD</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-between">
                    <div class="my-3 mx-2">
                        <button type="reset" class="btn btn-secondary">Reset</button>
                        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>
@endsection
