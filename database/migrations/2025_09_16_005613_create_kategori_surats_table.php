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
        Schema::create('kategori_surats', function (Blueprint $table) {
            $table->id(); // Auto increment
            $table->string('nama_kategori'); // nama kategori surat
            $table->text('deskripsi')->nullable(); // opsional
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kategori_surats');
    }
};
