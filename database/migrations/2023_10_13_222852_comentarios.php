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
        Schema::create('comentarios', function(Blueprint $table){
            $table -> id();
            $table -> string ('texto');
            $table->string('estado');
            $table->unsignedBigInteger('id_pqr');
            $table->foreign('id_pqr')->references('id')->on('pqr');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comentarios');
    }
};
