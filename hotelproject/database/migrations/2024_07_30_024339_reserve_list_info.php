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
        Schema::create('reserve_list_info', function (Blueprint $table) {
            $table->bigIncrements('reserve_list_id');
            $table->unsignedBigInteger('plan_id'); //FK設定
            $table->unsignedBigInteger('reserve_setting_id'); //FK設定
            $table->unsignedBigInteger('room_id'); //FK設定
            $table->unsignedBigInteger('guest_id'); //FK設定
            $table->date('check_in');
            $table->date('check_out');
            $table->integer('payment');
            $table->string('message', 50);
            $table->integer('status_flag');
            $table->timestamps();

            //外部キー制約を設定
            $table->foreign('plan_id')->references('plan_id')->on('plan_info')->onDelete('cascade');
            $table->foreign('reserve_setting_id')->references('reserve_setting_id')->on('reserve_setting_info')->onDelete('cascade');
            $table->foreign('room_id')->references('room_id')->on('room_info')->onDelete('cascade');
            $table->foreign('guest_id')->references('guest_id')->on('guest_info')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reserve_list_info');
    }
};
