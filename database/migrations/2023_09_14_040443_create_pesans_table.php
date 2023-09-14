<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('mobil_id')->nullable();
            $table->foreign('mobil_id')->references('id')->on('mobils')->onDelete('CASCADE');
            $table->date('tanggal_mulai');
            $table->date('tanggal_selesai');
            $table->integer('jumlahhari')->nullable();
            $table->double('totalharga')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('pesans');
    }
}
