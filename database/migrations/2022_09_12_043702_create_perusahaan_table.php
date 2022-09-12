<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerusahaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perusahaan', function (Blueprint $table) {
            $table->string('id_perusahaan', 20);
            $table->primary('id_perusahaan');
            $table->string('nama_perusahaan', 20);
            $table->string('alamat', 30);
            $table->string('no_telp', 12);
            $table->string('deskripsi',30);
            $table->string('email');
            $table->unique('email');
            $table->string('website', 20);

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
        Schema::dropIfExists('perusahaan');
    }
}
