<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResulApredsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resul_apreds', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('hito_id')->unsigned();
            $table->string('nombre');
            $table->string('descripcion');
            $table->decimal('nota');
            $table->foreign('hito_id')->references('id')->on('hitos');
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
        Schema::dropIfExists('resul-_apreds');
    }
}
