<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Projects extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects' , function (Blueprint $table){
            $table->id();
            $table->string('name');
            $table->bigInteger('user_id')->unsigned();
        });

        Schema::create('label_project' , function (Blueprint $table){
            $table->id();
            $table->bigInteger('label_id')->unsigned();
            $table->bigInteger('project_id')->unsigned();
        });

        Schema::create('project_user' , function (Blueprint $table){
            $table->id();
            $table->bigInteger('project_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
        Schema::dropIfExists('label_project');
        Schema::dropIfExists('project_user');
    }
}
