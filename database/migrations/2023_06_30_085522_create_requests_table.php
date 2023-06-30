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
        Schema::create('requests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('api_task_id');
            $table->foreign('api_task_id')->references('id')->on('api_tasks')->cascadeOnDelete()->cascadeOnUpdate();
            $table->unsignedBigInteger('sub_api_tasks_id');
            $table->foreign('sub_api_tasks_id')->references('id')->on('sub_api_tasks')->cascadeOnDelete()->cascadeOnUpdate();
            $table->longText('request');
            $table->string('programming_language');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('requests');
    }
};
