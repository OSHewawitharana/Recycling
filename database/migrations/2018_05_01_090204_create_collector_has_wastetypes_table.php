<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCollectorHasWastetypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collector_has_wastetypes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('collector_id');
            $table->unsignedBigInteger('wasteType_id');
            $table->timestamps();
            $table->foreign('collector_id')->references('id')->on('collectors')->onDelete('cascade');
            $table->foreign('wasteType_id')->references('id')->on('waste_types')->onDelete('cascade');
            


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('collector_has_wastetypes');
    }
}
