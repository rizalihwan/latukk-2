<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Siswa;
use Faker\Generator as Faker;

$factory->define(Siswa::class, function (Faker $faker) {
    return [
        'id' => $faker->uuid,
        'nama' => $faker->name,
        'nis' => 11806858,
        'jk' => 0,
        'tempat_lahir' => 'Bogor',
        'tgl_lahir' => $faker->date(),
        'alamat' => $faker->sentence(),
        'asal_sekolah' => 'Caringin',
        'kelas' => 'X',
        'jurusan' => 'RPL'
    ];
});
