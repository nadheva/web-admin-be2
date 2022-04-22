<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJadwalKuliah extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal_kuliah', function (Blueprint $table) {
            $table->id();
            $table->foreignId('enroll_matkul_id')->constrained('enroll_mata_kuliah')->onUpdate('cascade')->onDelete('cascade');
            $table->string('hari');
            $table->time('jam_mulai');
            $table->time('jam_selesai');
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
        Schema::dropIfExists('jadwal_kuliah');
    }
}
