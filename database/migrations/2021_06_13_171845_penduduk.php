<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Penduduk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //  Struktur tabel penduduk
        Schema::create('penduduk', function (Blueprint $table) {
            $table->id('id_penduduk');
            $table->string('nik',16)->unique();
            $table->string('nokk',16);
            $table->string('nama',100);
            $table->string('tmpt_lahir',50);
            $table->date('tgl_lahir');
            $table->enum('jenkel', ['l','p']);
            $table->enum('agama', ['islam', 'kristen', 'konghucu', 'hindu', 'buddha']);
            $table->string('alamat');
            $table->string('rt',3);
            $table->string('rw',3);
            $table->enum('pendidikan', ['n', 'sd', 'smp', 'sma', 'd1', 'd2', 'd3', 's1', 's2', 's3']);
            $table->enum('pekerjaan', ['n', 'rumahtangga', 'siswa', 'pns', 'nelayan', 'petani', 'tambak', 'lain']);
            $table->enum('status', ['lajang', 'nikah', 'duda', 'janda']);
            $table->datetime('created_at')->nullable();
            $table->datetime('updated_at')->nullable(); 
            $table->datetime('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Fungsi untuk menghapus tabel penduduk
        Schema::dropIfExists('penduduk');
    }
}
