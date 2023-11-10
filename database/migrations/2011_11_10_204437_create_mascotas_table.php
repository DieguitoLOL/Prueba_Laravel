<?php

use App\Models\Raza;
use App\Models\TipoMascota;
use App\Models\User;
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
        Schema::create('mascotas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 150);
            $table->datetime('fecha_nacimiento');
            $table->binary('foto');
            $table->foreignIdFor(User::class)->constrained();
            $table->foreignIdFor(TipoMascota::class)->constrained();
            $table->foreignIdFor(Raza::class)->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mascotas');
    }
};
