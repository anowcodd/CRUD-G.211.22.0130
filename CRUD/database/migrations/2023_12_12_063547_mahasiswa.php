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
        Schema::create('mahasiswa', function(Blueprint $table){
            $table->string('nim')->primary();
            $table->string('nama',150);
            $table->integer('umur');
            $table->string('alamat',255);
            $table->string('kota',100);
            $table->string('kelas',50);
            $table->string('jurusan',50);
            $table->datetime('created_at');
            $table->dateTime('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('mahasiswa');
    }
};
