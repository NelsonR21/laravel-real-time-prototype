<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropiertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('propierties', function (Blueprint $table) {
            $table->increments('id');
            $table->strign('identifier', 100);
            $table->string('description')->nullable();
            $table->integer('person_id')->unsigned();
            $table->foreign('person_id')
                ->references('id')
                ->on('person')
                ->onDelete('no action')
                ->onUpdate('no action');
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
        Schema::dropIfExists('propierties');
    }
}
