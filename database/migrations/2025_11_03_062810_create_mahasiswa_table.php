<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('mahasiswa', function (Blueprint $table) {
        $table->increments('nim');
        $table->string('nama_mahasiswa', 100);
        $table->string('jurusan', 100);
        $table->enum('gender', ['Male', 'Female', 'Other'])->nullable();
        $table->string('email')->unique();
        $table->string('alamat', 100);
        $table->timestamps();
    });
}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswa');
    }
};
