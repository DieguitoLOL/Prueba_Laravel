<?php

use App\Models\Mascota;
use App\Models\Vacuna;

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
        Schema::create('control_vacunas', function (Blueprint $table) {
            $table->unsignedInteger('mascota_id');
            $table->unsignedInteger('vacuna_id');
            $table->date('fecha');
            $table->timestamps();

            $table->primary(['Mascota_id', 'Vacuna_id']);

            $table->foreign('Mascota_id')->references('id')->on('Mascota');
            $table->foreign('Vacuna_id')->references('id')->on('Vacuna');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('control_vacunas');
    }
};
