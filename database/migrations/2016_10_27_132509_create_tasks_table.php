<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('task');
            $table->text('task_description');
            $table->boolean('status');
            $table->integer('BMC_id')->unsigned();
            $table->foreign('BMC_id')->references('id')->on('BMCS')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('teamWork_id')->unsigned();
            $table->foreign('teamWork_id')->references('id')->on('teamWorks')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::drop('tasks');
    }
}
