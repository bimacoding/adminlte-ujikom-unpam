<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuruTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guru', function (Blueprint $table) {
            $table->id();
            $table->string('nama',255);
            $table->string('nip',20);
            $table->string('jabatan',255);
            $table->string('pendidikan',255);
            $table->string('tempat_lahir',255);
            $table->string('tanggal_lahir',255);
            $table->string('agama',20);
            $table->string('telp',18);
            $table->string('alamat',255);
            $table->string('photo',255)->default('imageuser.jpg');
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
        Schema::dropIfExists('guru');
    }
}
