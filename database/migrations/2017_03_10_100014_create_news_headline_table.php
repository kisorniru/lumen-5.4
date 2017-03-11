<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsHeadlineTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('newsheadline', function (Blueprint $table) {
            $table->increments('id');
            $table->string('NewsTitle', 150);
            $table->string('NewsReporterName', 60);
            $table->string('NewsReportingArea', 60);
            $table->string('NewsCategory', 20);
            $table->string('NewsSmallDescription', 300);
            $table->string('NewsDetailsUrl', 200);
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
        Schema::dropIfExists('newsheadline');
    }
}
