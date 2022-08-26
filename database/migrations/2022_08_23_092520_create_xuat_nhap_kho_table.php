<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateXuatNhapKhoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('xuat_nhap_kho', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ma_sanpham');
            $table->string('so_luong');
            $table->string('gia');
            $table->string('nguoi_xuat_nhap');
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
        Schema::dropIfExists('xuat_nhap_kho');
    }
}
