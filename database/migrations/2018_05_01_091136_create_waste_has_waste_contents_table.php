<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWasteHasWasteContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('waste_has_waste_contents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('waste_id');
            $table->unsignedBigInteger('wasteContent_id');
            $table->timestamps();
            $table->foreign('waste_id')->references('id')->on('wastes')->onDelete('cascade');
            $table->foreign('wasteContent_id')->references('id')->on('waste_contents')->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('waste_has_waste_contents');
    }
}
