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
        Schema::create('zeiterfassungs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('Name')->default('');
            $table->string('Datum')->default('');
            $table->string('Kategorie')->default('');
            $table->string('Arbeitsbeginn')->default('');
            $table->string('Arbeitsende')->default('');
            $table->string('Mittagspause')->default('');
            $table->string('Arbeitszeit')->default('');
            $table->string('Soll_Arbeitszeit')->default('');
            $table->string('Ueberstunden_Minusstunden')->default('');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('zeiterfassung');
    }
};
