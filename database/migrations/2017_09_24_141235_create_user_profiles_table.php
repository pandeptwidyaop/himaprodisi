<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_profiles', function (Blueprint $table) {
            $table->uuid('id');
            $table->string('name');
            $table->date('birthday');
            $table->enum('sex',['male','female']);
            $table->text('address');
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
        Schema::dropIfExists('user_profiles');
    }
}
