<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRubricaCaractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rubrica_caracts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('criterio');
            $table->integer('rubrica_id')->unsigned();
            $table->foreign('rubrica_id')->references('id')->on('rubricas');
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
        Schema::dropIfExists('rubrica_caracts');
    }
}
