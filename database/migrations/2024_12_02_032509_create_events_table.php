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
        Schema::create('events', function (Blueprint $table) {
            $table->id(); // ID Kegiatan (Primary Key)
            $table->string('nama_kegiatan'); // Nama Kegiatan
            $table->text('deskripsi')->nullable(); // Deskripsi (opsional)
            $table->date('tanggal'); // Tanggal
            $table->time('waktu'); // Waktu
            $table->string('lokasi'); // Lokasi
            $table->timestamps(); // Created_at dan Updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
