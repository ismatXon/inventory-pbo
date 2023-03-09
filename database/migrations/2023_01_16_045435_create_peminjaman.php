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
        Schema::create('peminjamans', function (Blueprint $table) {
            $table->id();
            $table->integer('nopeminjaman');
            $table->date('tglpeminjaman');
            $table->string('nmpeminjaman');
            $table->unsignedBigInteger('idbarang');
            $table->integer('jmlbarang');
            $table->enum('status',['1','2']);
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
        Schema::dropIfExists('peminjamans');
    }
};
