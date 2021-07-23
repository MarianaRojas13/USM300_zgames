<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaJuegos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('juegos', function (Blueprint $table) {
            $table->id();
            $table->string("nombre",100);
            $table->string("descripcion",200);
            $table->tinyInteger("apto_minios")->default(0);//0 es no y 1 si .
            $table->integer("precio")->unsigned();//significa que no hay negativos
            $table->date("fecha_lanzamiento");
            //las id de las tablas simebre son bigInteger ->unsigned
            $table->bigInteger("consola_id")->unsigned();//es el nombre que tendrá nuestra columna,se define la columna consola_id
            //crea la clave foranea
            $table->foreign("consola_id")->references("id")->on("consolas")->onDelete("cascade");
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
        Schema::dropIfExists('juegos');
    }
}
