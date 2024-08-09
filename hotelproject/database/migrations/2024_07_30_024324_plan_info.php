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
        Schema::create('plan_info', function (Blueprint $table) {
            $table->bigIncrements('plan_id');
            $table->string('plan_name', 255);
            $table->string('plan_pic', 255);
            $table->string('plan_desc', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plan_info');
    }
};
