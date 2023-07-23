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
        Schema::create('profile', function (Blueprint $table) {
            $table->id('id_profile');
            $table->string('nik_1', 100)->nullable();
            $table->string('nik_2', 100)->nullable();
            $table->string('nama_lengkap');
            $table->string('panggilan', 150);
            $table->string('jenis_kelamin', 50);
            $table->string('tempat_lahir')->nullable();
            $table->date('tgl_lahir')->nullable();
            $table->text('alamat')->nullable();
            $table->string('agama', 50)->nullable();
            $table->string('pekerjaan')->nullable();
            $table->string('status', 50)->nullable();
            $table->string('kontak_handphone')->nullable();
            $table->string('email')->nullable();
            $table->text('deskripsi')->nullable();
            $table->unsignedBigInteger('photo');
            $table->timestamps();

            $table->foreign('photo')
                ->references('id_photo_profile')
                ->on('photo_profile')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profile');
    }
};
