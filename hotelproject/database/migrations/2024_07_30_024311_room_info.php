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
        Schema::create('room_info', function (Blueprint $table) {
            $table->bigIncrements('room_id');
            $table->string('room_name', 255);
            $table->integer('room_num');
            $table->string('room_pic', 255);
            $table->string('room_desc', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('room_info');
    }
};
