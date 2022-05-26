<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_kurikulum_utamas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kurikulum_id')->constrained()->onDelete('cascade');
            $table->string('kode_matkul')->unique();
            $table->integer('sks');
            $table->integer('semester');
            $table->string('nama_matkul');
            $table->string('kategori');
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
        Schema::dropIfExists('data_kurikulum_utamas');
    }
};
