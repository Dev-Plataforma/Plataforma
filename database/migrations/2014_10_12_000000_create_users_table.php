<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('apellidoP');
            $table->string('apellidoM');
            $table->integer('telefono');
            $table->integer('ci');
            $table->string('email')->unique();
            $table->string('password');
            $table->enum('tipo',['admin','docente','estudiante']);
            $table->string('imagen');
            $table->string('codigo');
            $table->integer('carrera_id')->unsigned();
            $table->foreign('carrera_id')->references('id')->on('carreras');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
