<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRubricasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rubricas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->integer('resul_apreds_id')->unsigned();
            $table->foreign('resul_apreds_id')->references('id')->on('resul_apreds');
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
        Schema::dropIfExists('rubricas');
    }
}
