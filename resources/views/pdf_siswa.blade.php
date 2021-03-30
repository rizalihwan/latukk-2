<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDF Siswa</title>
</head>
<body>
    <hr>
    <h2 style="text-align: center;">Nama Siswa : {{ $siswa->nama }}</h2>
    <hr style="margin-bottom: 20px;">
    <table border="1" cellspacing="0" cellpading="5" style="width: 100%;">
        <thead>
            <tr>
                <th scope="col">Nis</th>
                <th scope="col">Nama</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Tempat Lahir</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">Asal Sekolah</th>
                <th scope="col">Kelas</th>
                <th scope="col">Jurusan</th>
              </tr>
        </thead>
        <tbody>
            <tr>
                <td style="text-align: center;">{{ $siswa->nis }}</td>
                <td style="text-align: center;">{{ $siswa->nama }}</td>
                <td style="text-align: center;">{{ $siswa->GenderDefinition }}</td>
                <td style="text-align: center;">{{ $siswa->tempat_lahir }}</td>
                <td style="text-align: center;">{{ $siswa->tgl_lahir }}</td>
                <td style="text-align: center;">{{ $siswa->asal_sekolah }}</td>
                <td style="text-align: center;">{{ $siswa->kelas }}</td>
                <td style="text-align: center;">{{ $siswa->jurusan }}</td>              
            </tr>
        </tbody>
    </table>
</body>
</html>