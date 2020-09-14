<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRealizarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('realizar', function (Blueprint $table) {
            $table->bigInteger('cod_registro')->unsigned();
            $table->bigInteger('cod_actividad')->unsigned();

            $table->foreign('cod_registro')->references('id')->on('registros');
            $table->foreign('cod_actividad')->references('id')->on('actividades');

            $table->primary(['cod_registro', 'cod_actividad']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('realizar');
    }
}
