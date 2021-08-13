<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserDatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_datas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('phone');
            $table->string('sessionId');
            $table->integer('level_1');
            $table->integer('level_2');
            $table->integer('level_3');
            $table->string('level_4');
            $table->integer('level_5');
            $table->integer('level_6');
            $table->integer('level_7');
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
        Schema::dropIfExists('user_datas');
    }
}
