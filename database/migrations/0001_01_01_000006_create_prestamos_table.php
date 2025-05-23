<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
    Schema::create('prestamos', function (Blueprint $table) {
        $table->id();
        $table->foreignId('equipo_id')->constrained('equipos');
        $table->foreignId('user_id')->constrained('users');
        $table->date('fecha_prestamo');
        $table->date('fecha_devolucion');
        $table->text('observaciones')->nullable();
        $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prestamos');
    }
};
