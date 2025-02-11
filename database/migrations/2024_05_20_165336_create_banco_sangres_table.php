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
        Schema::create('banco_sangres', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tipo_sangre_id')->constrained('tipo_sangres')->onDelete('cascade');
            $table->integer('unidades');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('banco_sangres');
    }
};
