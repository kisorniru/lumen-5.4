<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('newsdetails', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('NewsHeadLineId')->unsigned();
            $table->text('NewsDetails');
            $table->string('NewsImagesUrl', 200);
            $table->timestamps();
            $table->foreign('NewsHeadLineId')->references('id')->on('newsheadline')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('newsdetails');
    }
}
