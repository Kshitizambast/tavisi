<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChallengesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('challenges', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('sub_category_id');
            $table->unsignedInteger('participation_level_id');
            $table->text('challenge_topic');
            $table->text('challenge_t&c');
            $table->string('image_or_video_feed_id');
            $table->string('slug');
            $table->unsignedInteger('participation_limit');
            $table->boolean('active_for_participation');
            $table->date('active_for_participation_start_date');
            $table->date('active_for_participation_last_date');
            $table->boolean('active_challenge');
            $table->date('active_challenge_start_date');
            $table->date('active_challenge_last_date');
            $table->unsignedInteger('active_location_id');
            $table->double('participation_fee');
            $table->double('credit_requirements');
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
        Schema::dropIfExists('challenges');
    }
}
