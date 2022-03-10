<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIbadahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ibadah', function (Blueprint $table) {
            $table->id();

            $table->foreignId('master_ibadah_id')->constrained('master_ibadah')->onDelete('cascade')->onUpdate('cascade');
            $table->date('tanggal_ibadah');
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
        Schema::dropIfExists('ibadah');
    }
}
