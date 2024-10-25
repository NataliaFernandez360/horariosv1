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
        Schema::create('carreras', function (Blueprint $table) {
            $table->id();
            $table->string('idCarrera',15)->unique();
            $table->string('nombreCarrera',100)->unique();
            $table->string('nombreMediano',15)->unique();
            $table->string('nombreCorto',5)->unique();
            $table->foreignId("depto_id")
            ->constrained()
            ->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carreras');
    }
};
