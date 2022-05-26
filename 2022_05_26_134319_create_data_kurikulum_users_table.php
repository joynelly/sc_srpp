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
        Schema::create('data_kurikulum_users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('data_kurikulum_utama_id')->constrained()->onDelete('cascade');
            $table->integer('sks');
            $table->integer('semester');
            $table->string('ambil')->nullable();
            $table->string('nilai')->nullable();
            $table->decimal('mutu',3,2)->nullable();
            $table->integer('prioritas')->nullable();
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
        Schema::dropIfExists('data_kurikulum_users');
    }
};
