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
        Schema::create('responses', function (Blueprint $table) {
            $table->id();
            $table->string('name_response');
            $table->string('http_code');
            $table->longText('response');
            $table->longText('desc');
            $table->string('response_type');
            $table->unsignedBigInteger('api_task_id');
            $table->foreign('api_task_id')->references('id')->on('api_tasks')->cascadeOnDelete()->cascadeOnUpdate();
            $table->unsignedBigInteger('sub_api_tasks_id');
            $table->foreign('sub_api_tasks_id')->references('id')->on('sub_api_tasks')->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('responses');
    }
};
