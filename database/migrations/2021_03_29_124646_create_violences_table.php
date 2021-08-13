<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateViolencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('violences', function (Blueprint $table) {
            $table->bigIncrements('violence_id');
            $table->string('Address');
            $table->integer('violence_type');
            $table->bigInteger('violenced_person');
            $table->bigInteger('violenced_by');
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
        Schema::dropIfExists('violences');
    }
}
