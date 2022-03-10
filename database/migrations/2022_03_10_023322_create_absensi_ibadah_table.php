<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbsensiIbadahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absensi_ibadah', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ibadah_id')->constrained('ibadah')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('jemaat_id')->constrained('jemaat')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('absensi_ibadah');
    }
}
