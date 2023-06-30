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
        Schema::create('query_parameters', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('api_task_id');
            $table->foreign('api_task_id')->references('id')->on('api_tasks')->cascadeOnDelete()->cascadeOnUpdate();
            $table->unsignedBigInteger('sub_api_tasks_id');
            $table->foreign('sub_api_tasks_id')->references('id')->on('sub_api_tasks')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('key');
            $table->string('value');
            $table->longText('desc');
            $table->string('rules');
            $table->string('type');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('query_parameters');
    }
};
