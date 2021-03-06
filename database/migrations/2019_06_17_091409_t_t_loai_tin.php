<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TTLoaiTin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loaitin', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('idTheLoai')->unsigned();
            
            $table->string('ten');
            $table->string('tenkhongdau');
            $table->timestamps();

            $table->foreign('idTheLoai')->references('id')->on('theloai');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('loaitin');
    }
}
