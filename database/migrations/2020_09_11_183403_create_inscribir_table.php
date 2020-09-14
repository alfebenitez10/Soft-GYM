<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInscribirTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscribir', function (Blueprint $table) {
            $table->bigInteger('cod_cliente')->unsigned();
            $table->bigInteger('cod_actividad')->unsigned();
            
            $table->foreign('cod_cliente')->references('id')->on('clientes')->onDelete('cascade');
            $table->foreign('cod_actividad')->references('id')->on('actividades')->onDelete('cascade');

            $table->primary(['cod_cliente','cod_actividad']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inscribir');
    }
}
