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
        Schema::create('arsip_surat', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_surat');
            $table->unsignedBigInteger('kategori_id'); // relasi ke tabel kategori
            $table->string('judul');
            $table->timestamp('waktu_pengarsipan')->nullable();
            $table->string('file_surat')->nullable();
            $table->timestamps();

            // foreign key
            $table->foreign('kategori_id')
                  ->references('id')
                  ->on('kategori_surats')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('arsip_surat');
    }
};
