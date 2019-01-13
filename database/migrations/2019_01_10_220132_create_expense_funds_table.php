<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExpenseFundsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expense_funds', function (Blueprint $table) {
            $table->unsignedInteger('amount');
            $table->unsignedInteger('fund_id');
            $table->foreign('fund_id')
                ->references('id')
                ->on('funds')
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
        Schema::dropIfExists('expense_funds');
    }
}
