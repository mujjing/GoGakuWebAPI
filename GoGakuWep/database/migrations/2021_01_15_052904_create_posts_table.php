<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->mediumText('body');
            $table->timestamps();
        });

        Schema::create('post_list', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title', 100);
            $table->string('image', 100);
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('list_word', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('word', 100);
            $table->string('mean', 100);
            $table->string('image', 100);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
        Schema::dropIfExists('post_list');
        Schema::dropIfExists('list_word');
    }
}
