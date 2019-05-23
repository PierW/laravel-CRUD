<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("brand");
            $table->string("model");
            $table->integer("displacement");
            $table->integer("max_speed");
            $table->timestamps();
        });

        DB::table("cars")->insert([
          "brand" => "Fiat",
          "model" => "Punto",
          "displacement" => 1200,
          "max_speed" => 180
        ]);

        DB::table("cars")->insert([
          "brand" => "Ford",
          "model" => "Mustang",
          "displacement" => 1800,
          "max_speed" => 240
        ]);

        DB::table("cars")->insert([
          "brand" => "Ferrari",
          "model" => "Enzo",
          "displacement" => 3200,
          "max_speed" => 320
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
}
