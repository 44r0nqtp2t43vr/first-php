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
        Schema::create('students', function (Blueprint $table) {
            // $table->id();
            $table->integer('studentid')->primary();
            $table->string('studentfname', 100);
            $table->string('studentmname', 100)->nullable();
            $table->string('studentlname', 100);
            $table->integer('collegeid');
            $table->integer('programid');
            $table->integer('studentyear');
            $table->foreign('programid')->references('programid')->on('programs')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('collegeid')->references('collegeid')->on('colleges')->onDelete('cascade')->onUpdate('cascade');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
};
