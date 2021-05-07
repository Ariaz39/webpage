<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',100);
            $table->string('apellido',100);
            $table->smallInteger('telefono');
            $table->string('email',50);
            $table->unsignedTinyInteger('estado_id');
            $table->unsignedTinyInteger('tipodoc_id');
            $table->string('documento');
            $table->text('password');
            $table->timestamps();

            $table->foreign('tipodoc_id')->references('id')->on('tipodoc');
            $table->foreign('estado_id')->references('id')->on('estado');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
