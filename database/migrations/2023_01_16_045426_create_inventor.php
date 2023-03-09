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
        Schema::create('inventors', function (Blueprint $table) {
            $table->id();
            $table->integer('noinventor');
            $table->date('tglinventor');
            $table->unsignedBigInteger('idbarang');
            $table->integer('jmlbarang');
            $table->string('jeniaset','50');
            $table->enum('status',['bagus','rusak']);
            $table->unsignedBigInteger('idpetugas');
            $table->timestamps();
            $table->foreign('idbarang')->references('id')->on('barangs');
            $table->foreign('idpetugas')->references('id')->on('petugas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inventors');
    }
};
