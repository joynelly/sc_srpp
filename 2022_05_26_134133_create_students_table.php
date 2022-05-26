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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('jenis_kelamin');
            $table->string('tanggal_lahir');
            $table->year('tahun_masuk');
            $table->decimal('ipk',3,2)->nullable();
            $table->string('nama_jurusan');
            $table->foreignId('user_id')->unique()->constrained()->onDelete('cascade');
            $table->foreignId('kurikulum_id')->constrained();
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
        Schema::dropIfExists('students');
    }
};
