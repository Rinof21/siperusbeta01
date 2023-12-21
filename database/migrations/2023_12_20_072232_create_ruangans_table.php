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
        Schema::create('ruangans', function (Blueprint $table) {
            $table->integer('id_ruangan')->primary();
            $table->string('kode_ruangan',128);
            $table->string('nama_ruangan',128);    
            $table->string('foto_ruangan',128);    
            $table->string('keterangan',128);    
            $table->integer('prodi_id');    
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ruangans');
    }
};
