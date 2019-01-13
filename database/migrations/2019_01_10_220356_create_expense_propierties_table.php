<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExpensePropiertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expense_propierties', function (Blueprint $table) {
            $table->unsignedInteger('propierty_id');
            $table->foreign('propierty_id')
                ->references('id')
                ->on('propierties')
                ->onDelete('no action')
                ->onUpdate('no action');
            $table->unsignedInteger('expense_id');
            $table->foreign('expense_id')
                ->references('id')
                ->on('expenses')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('expense_propierties');
    }
}
