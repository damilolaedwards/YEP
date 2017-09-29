<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 64);
            $table->string('age', 32);
            $table->string('email', 32);
            $table->string('phone', 16);
            $table->string('gender', 12);
            $table->string('state', 32);
            $table->string('academic', 16);
            $table->string('institution', 64)->nullable();
            $table->string('faculty', 64)->nullable();
            $table->string('course', 64)->nullable();
            $table->string('level', 16)->nullable();
            $table->string('status', 64)->nullable();
            $table->string('qualification', 32)->nullable();
            $table->string('discipline', 64)->nullable();
            $table->string('business', 8);
            $table->string('specify', 160);
            $table->string('intention', 8);
            $table->string('hear');
            $table->string('pursue');
            $table->string('sector');
            $table->string('requirement');
            $table->string('aspiration', 210);
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
        Schema::dropIfExists('forms');
    }
}
