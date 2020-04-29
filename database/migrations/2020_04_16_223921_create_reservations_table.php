<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('reservations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('checkin');
            $table->date('checkout');
            $table->string('room');
            $table->string('child');
            $table->string('adult');
            $table->string('nbroom');
            $table->string('prix');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email');
            $table->string('confemail');
            $table->string('country');
            $table->string('air');
            $table->string('car');
            $table->string('cardname');
            $table->string('cardnumber');
            $table->string('cvv');
            $table->string('mm');
            $table->string('yyyy');
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
        Schema::dropIfExists('reservations');
    }
}
