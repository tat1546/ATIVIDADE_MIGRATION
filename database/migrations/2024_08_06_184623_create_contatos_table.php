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
        //Criando tabela contato
        Schema::create('contatos', function (Blueprint $table) {
            //colunas da tabela contato
            $table->id();

            $table->string('nome', 50);
            $table->string('telefone', 14);
            $table->string('email', 50);
            $table->string('motivo_contato');
            $table->text('mensagem');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contatos');
    }
};
