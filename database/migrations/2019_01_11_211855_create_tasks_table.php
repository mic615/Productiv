<?php

use Illuminate\Support\Facades\Schema;
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
            $table->string('title');
            $table->string('category');
            $table->text('description');
            $table->dateTime('task_start_time')->nullable();
            $table->dateTime('task_end_time')->nullable();
            $table->dateTime('task_deadline')->nullable();
            $table->boolean('assigned')->default(false);
            $table->boolean('completed')->default(false);
            $table->timestamps();
            // priority
            // project
            // enjoyment

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
