<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbRentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_stock_mobil', function (Blueprint $table) {
            $table->increments('stock_id');
            $table->string('stock_kode');
	        $table->string('stock_nama');
	        $table->string('stock_warna');
	        $table->string('stock_jenis');
	        $table->string('stock_tahun');
            $table->string('stock_jumlah');
            $table->string('stock_harga');
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
        Schema::dropIfExists('tb_rent');
    }
}
