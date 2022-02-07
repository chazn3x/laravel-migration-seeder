<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travels', function (Blueprint $table) {
            $table->id();
            $table->string("trip_names", 150);
            $table->string("destinations", 150);
            $table->tinyInteger("nights")->default(1);
            $table->string("stay_addresses", 200);
            $table->tinyInteger("adults");
            $table->tinyInteger("children");
            $table->tinyInteger("rooms")->default(1);
            $table->date("dates");
            $table->boolean("flight_included")->default(1);
            $table->boolean("brakfast_included")->default(1);
            $table->float("prices", 6, 2);

            // timestamps
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
        Schema::dropIfExists('travels');
    }
}
