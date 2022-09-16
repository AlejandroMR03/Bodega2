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
        Schema::create('clientes', function (Blueprint $table) {

            $table->id();

            $table->string('Nombre');
            $table->string('Primer Apellido');
            $table->string('Numero Documento');
            $table->string('Direccion');
            $table->integer('Telefono');
            $table->dateTime('fecha ultima compra');
            $table->integer('Numero de tarjeta Asociado');
            $table->string('Correo Electronico');
            $table->string('Foto');
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
        Schema::dropIfExists('clientes');
    }
};
