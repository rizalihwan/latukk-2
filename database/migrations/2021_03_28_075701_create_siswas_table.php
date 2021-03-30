<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->integer('nis', false)->unique();
            $table->string('nama', 70);
            $table->boolean('jk');
            $table->string('tempat_lahir', 50);
            $table->date('tgl_lahir');
            $table->text('alamat');
            $table->string('asal_sekolah');
            $table->string('kelas', 5);
            $table->string('jurusan', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswas');
    }
}
