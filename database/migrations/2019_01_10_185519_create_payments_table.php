<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->increments('id');
            // $table->enum('status', ['ONHOLD','CONFIRMED','PROCESSED']);
            /**
             * The client can assign the value he sees fit
             */
            $table->tinyInteger('status')->unsigned();
            $table->unsignedDecimal('amount');
            $table->tinyInteger('pay_type')->unsigned();
            $table->date('date');
            $table->string('note');
            $table->string('identifier');
            $table->integer('person_id')->unsigned();
            $table->foreign('person_id')
                ->references('id')
                ->on('persons')
                ->onDelete('no action')
                ->onUpdate('no action');
            $table->integer('propierty_id')->unsigned();
            $table->foreign('propierty_id')
                ->references('id')
                ->on('propierties')
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
        Schema::dropIfExists('payments');
    }
}
