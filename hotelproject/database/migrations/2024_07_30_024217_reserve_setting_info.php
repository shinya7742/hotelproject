<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('reserve_setting_info', function (Blueprint $table) {
            $table->bigIncrements('reserve_setting_id');
            $table->unsignedBigInteger('room_id'); //FKとしてroom_idを設定
            $table->date('date');
            $table->integer('room_num');
            $table->integer('price');
            $table->integer('reserve_status');
            $table->timestamps();

            //外部キー制約を設定
            $table->foreign('room_id')->references('room_id')->on('room_info')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reserve_setting_info');
    }
};
