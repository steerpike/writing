<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompetitionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('competitions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('competition')->nullable();
            $table->string('url')->nullable();
            $table->string('type')->nullable();
            $table->string('country')->nullable();
            $table->string('closing_date')->nullable();
            $table->string('winner_announcement')->nullable();
            $table->string('max_words')->nullable();
            $table->string('currency')->nullable();
            $table->string('fee')->nullable();
            $table->string('prize')->nullable();
            $table->longText('notes')->nullable();
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
        //
        Schema::drop('competitions');
    }
}
