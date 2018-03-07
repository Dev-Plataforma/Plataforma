<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRubricaDetallesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rubrica_detalles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('rango');
            $table->decimal('nota');
            $table->string('descripcion');
            $table->integer('rubrica_caracts_id')->unsigned();
            $table->foreign('rubrica_caracts_id')->references('id')->on('rubrica_caracts');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rubrica_detalles');
    }
}
