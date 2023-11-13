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
        Schema::create('agremiados', function (Blueprint $table) {
            $table->id();
            $table->string('apellido(s)');
            $table->string('nombre');
            $table->string('sexo');
            $table->string('NUP');
            $table->string('NUE', 10);
            $table->string('RFC',13);
            $table->string('NSS',11);
            $table->date('f_nacimiento');
            $table->integer('telefono');
            $table->boolean('cuota');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agremiados');
    }
};
