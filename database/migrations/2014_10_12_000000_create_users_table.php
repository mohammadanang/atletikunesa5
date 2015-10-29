<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schools', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('adstreet');
            $table->string('advillage');
            $table->string('addistricts');
            $table->string('adcity');
            $table->string('adpostalcode');
            $table->string('adphone');
            $table->string('hmname');
            $table->string('hmphone');
            $table->string('hmmobile');
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->string('activation_code');
            $table->boolean('active')->default(0);
            $table->rememberToken();
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
        Schema::drop('schools');
    }
}
