<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTablePost extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->string('post_title',255);
            $table->string('post_desc',255);
        });

        Schema::table('images', function (Blueprint $table) {
            $table->integer('post_id')->nullable()->unsigned();
            $table->foreign('post_id')->references('id')->on('posts');
        });

        Schema::table('videos', function (Blueprint $table) {
            $table->integer('post_id')->nullable()->unsigned();
            $table->foreign('post_id')->references('id')->on('posts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropForeign('posts_image_id_foreign');
            $table->dropForeign('posts_video_id_foreign');
            $table->dropColumn('image_id');
            $table->dropColumn('video_id');
        });
    }
}
