<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //crea tabla en bd
        Schema::create('videogames', function (Blueprint $table) {
            $table->id();
            $table->text('titulo');
            $table->text('miniatura');
            $table->text('descripcion');
            $table->text('url_vj');
            $table->text('genero');
            $table->text('plataforma');
            $table->text('publisher');
            $table->text('desarrollador');
            $table->text('fecha_estreno');
            $table->text('perfil_freetogame_url');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
