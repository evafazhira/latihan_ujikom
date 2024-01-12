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
        Schema::create('detail_penjualan', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_penjualan')->unsigned()->nullable();
            $table->foreign('id_penjualan')->references('id')->on('penjualan')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('id_produk')->unsigned()->nullable();
            $table->foreign('id_produk')->references('id')->on('produk')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('jumlah_produk');
            $table->decimal('subtotal');
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
        Schema::dropIfExists('detail_penjualan');
    }
};
