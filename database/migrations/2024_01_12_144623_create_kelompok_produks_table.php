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
        Schema::create('kelompok_produk', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kelompok', 50);
            $table->text('deskripsi')->nullable(); // Deskripsi boleh kosong
            $table->boolean('aktif')->default(true); // Status kelompok, default aktif
            $table->string('kode')->unique(); // Kode unik untuk kelompok produk
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kelompok_produks');
    }
};
