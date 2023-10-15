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
        Schema::table('semestre_curso_docente', function (Blueprint $table) {
            $table->integer('Acreditacion')->default(0); // Agrega la columna "Acreditacion" como tipo INT y valor predeterminado 0
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('semestre_curso_docente', function (Blueprint $table) {
            $table->dropColumn('Acreditacion'); // Elimina la columna "Acreditacion" si la migración se revierte
        });
    }
};
