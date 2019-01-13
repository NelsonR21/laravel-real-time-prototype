<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExpenseFieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expense_fields', function (Blueprint $table) {
            $table->unsignedInteger('amount');
            $table->unsignedInteger('field_id');
            $table->foreign('field_id')
                ->references('id')
                ->on('fields')
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
        Schema::dropIfExists('expense_fields');
    }
}
