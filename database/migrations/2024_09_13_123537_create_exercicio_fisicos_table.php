<?php

use App\Models\Frequencia_exercicio;
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
        Schema::create('exercicio_fisicos', function (Blueprint $table) {
            $table->id();
            $table->boolean('realiza');
            $table->foreignIdFor(Frequencia_exercicio::class);
            $table->integer('duracao');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exercicio_fisicos');
    }
};
