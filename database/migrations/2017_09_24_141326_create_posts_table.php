<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->uuid('id');
            $table->string('title');
            $table->string('category');
            $table->text('description');
            $table->text('slug');
            $table->text('tags');
            $table->text('pictures');
            $table->boolean('is_publish')->default(1);
            $table->uuid('user_id');
            $table->timestamps();

            $table->primary('id');
            $table->foreign('user_id')->references('id')->on(env('DB_DATABASE_MASTER').'.users');

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
    }
}
