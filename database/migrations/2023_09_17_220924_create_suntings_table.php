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
        Schema::create('suntings', function (Blueprint $table) {
            $table->id();
            $table->string('posisi');
            $table->string('nama_agency');
            $table->string('lokasi');
            $table->text('kriteria');
            $table->text('jobdesk');
            $table->text('benefit');
            $table->string('link_form');
            $table->integer('kuota');
            $table->string('telepon');
            $table->string('email');
            $table->string('instagram');
            $table->string('facebook')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suntings');
    }
};
