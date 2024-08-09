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
        Schema::create('inquiry_info', function (Blueprint $table) {
            $table->bigIncrements('inquiry_id');
            $table->string('family_name', 50);
            $table->string('first_name', 50);
            $table->string('mail_address', 255);
            $table->string('sentence', 255);
            $table->integer('status_flag');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inquiry_info');
    }
};
