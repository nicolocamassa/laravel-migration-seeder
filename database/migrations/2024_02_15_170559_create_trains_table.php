<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->char('agency', 30);
            $table->char('departure_station', 40);
            $table->char('arrival_station', 40);
            $table->time('departure_time');
            $table->time('arrival_time');
            $table->smallInteger('train_code')->unsigned();
            $table->tinyInteger('number_carriages')->unsigned();
            $table->boolean('punctual');
            $table->boolean('deleted');
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
        Schema::dropIfExists('trains');
    }
};
