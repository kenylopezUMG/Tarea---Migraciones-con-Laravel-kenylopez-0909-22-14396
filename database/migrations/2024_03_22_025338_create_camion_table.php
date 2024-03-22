<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCamionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('camion', function (Blueprint $table) {
            $table->id("id_camion");
            $table->string("placa",8);
            $table->string("Codigo_interno",8);
            $table->string("color",35);
            $table->date("modelo");
            $table->string("capacidad_toneladas",45);
            $table->timestamps();//esta linea crea el created_at y updated_at

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('camion');
    }
}
