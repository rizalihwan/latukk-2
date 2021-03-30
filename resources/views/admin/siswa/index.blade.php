@extends('layouts.app')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between">
            <h5>
                | Data Siswa
            </h5>
            <a href="{{ route('admin.siswa.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Siswa Baru</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Action</th>
                            <th>Nis</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Jenis Kelamin</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Asal Sekolah</th>
                            <th>Kelas</th>
                            <th>Jurusan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($siswas as $siswa)
                            <tr>
                                <td>
                                    <a href="{{ route('siswa.pdf', $siswa->id) }}" class="btn btn-info btn-sm mb-1"><i class="fa fa-print"></i> Pdf</a>
                                    <a href="{{ route('admin.siswa.edit', $siswa->id) }}" class="btn btn-sm btn-warning mb-1"><i class="fa fa-edit"></i> Edit</a>
                                    <button type="submit" onclick="deleteSiswa('{{ $siswa->id }}')" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Delete</button>
                                    <form action="{{ route('admin.siswa.destroy', $siswa->id) }}" method="post" id="DeleteSiswa{{ $siswa->id }}">
                                        @csrf
                                        @method('delete')
                                    </form>
                                </td>
                                <td>{{ $siswa->nis }}</td>
                                <td>{{ $siswa->nama }}</td>
                                <td>{{ $siswa->alamat }}</td>
                                <td>{{ $siswa->GenderDefinition }}</td>
                                <td>{{ $siswa->tempat_lahir }}</td>
                                <td>{{ $siswa->tgl_lahir }}</td>
                                <td>{{ $siswa->asal_sekolah }}</td>
                                <td>{{ $siswa->kelas }}</td>
                                <td>{{ $siswa->jurusan }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection
@push('script')
<script>
    function deleteSiswa(id) {
        Swal.fire({
            title: 'Apa Anda Yakin?',
            text: "Jika anda menghapus ini, Anda tidak bisa Mengembalikannya!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, hapus!'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        title: "Menghapus siswa",
                        showConfirmButton: false,
                        timer: 2300,
                        timerProgressBar: true,
                        onOpen: () => {
                            document.getElementById(`DeleteSiswa${id}`).submit();
                            Swal.showLoading();
                        }
                    });
                }
        })
    }
</script>   
@endpush
