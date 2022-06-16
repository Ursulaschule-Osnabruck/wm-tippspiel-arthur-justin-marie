<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTippsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipps', function (Blueprint $table) {
            $table->id();
            $table->integer('spiel_id');
            $table->integer('user_id');
            $table->integer('tipp_tore_heim');
            $table->integer('tipp_tore_gast');
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
        Schema::dropIfExists('tipps');
    }
}
