<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Relationship extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('country_name',200);
            $table->timestamps();
        });

        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',200);
            $table->string('email',200);
            $table->string('profile_photo',200);
            $table->integer('country_id')->unsigned();
            $table->timestamps();
            $table->foreign('country_id')->references('id')->on('countries');
        });

        Schema::create('images', function (Blueprint $table) {
            $table->increments('id');
            $table->string('image_name',200);
            $table->timestamps();
        });
        Schema::create('videos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('video_name',200);
            $table->timestamps();
        });
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('image_id')->unsigned();
            $table->integer('video_id')->unsigned();
            $table->integer('country_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->timestamps();
            $table->foreign('image_id')->references('id')->on('images');
            $table->foreign('video_id')->references('id')->on('videos');

            $table->foreign('country_id')->references('id')->on('countries');
            $table->foreign('user_id')->references('id')->on('users');
        });

        Schema::create('comments', function (Blueprint $table) {
           $table->increments('id');
           $table->string('comments',200);
           $table->integer('post_id')->unsigned();
           $table->integer('user_id')->unsigned();
           $table->timestamps();
           $table->foreign('post_id')->references('id')->on('posts');
           $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
