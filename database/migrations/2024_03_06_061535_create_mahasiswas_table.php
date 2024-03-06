<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->id();
            $table->uuid('mhs_id')->unique();
            $table->string('nim')->unique();
            $table->string('nama');
            $table->string('jenis_kelamin');
            $table->unsignedBigInteger('prodi_id');
            $table->foreign( 'prodi_id' )->references('id') ->on('jurusan')->cascadeOnDelete();
            $table->unsignedBigInteger('fakultas_id');
            $table->foreign( 'fakultas_id' )->references('id')->on('fakultas')->cascadeOnDelete();
            $table->date('tanggal_lahir');
            $table->text('alamat');
            $table->string('email')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswa');
    }
};
