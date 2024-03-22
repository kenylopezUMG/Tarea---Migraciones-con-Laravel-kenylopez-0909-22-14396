<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToCamionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('camion', function (Blueprint $table) {
            $table->unsignedBigInteger('id_transporte')->after('Codigo_interno');
            $table->foreign('id_transporte')->references('id_transporte')->on('transporte')->onDelete('cascade');
            $table->unsignedBigInteger('id_marca')->after('modelo');//el after es para poner en q posicion ponerlo
            $table->foreign('id_marca')->references('id_marca')->on('marca')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('camion', function (Blueprint $table) {
            $table->dropColumn('id_transporte');
            $table->dropForeign(['id_transporte']);
            $table->dropColumn('id_marca');
            $table->dropForeign(['id_marca']);
        });
    }
}
