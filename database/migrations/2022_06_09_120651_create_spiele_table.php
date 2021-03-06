<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpieleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spiele', function (Blueprint $table) {
            $table->id();
            $table->integer('heim_id');
            $table->integer('gast_id');
            $table->integer('tore_heim')->nullable();
            $table->integer('tore_gast')->nullable();
            $table->datetime('zeit');
            $table->char('gruppe',1);
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
        Schema::dropIfExists('spiele');
    }
}
