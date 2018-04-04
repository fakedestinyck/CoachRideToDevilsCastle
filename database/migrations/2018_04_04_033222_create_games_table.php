<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('number_people')->default(1)->unsigned();
            $table->tinyInteger('user_id_1')->nullable();
            $table->tinyInteger('user_id_2')->nullable();
            $table->tinyInteger('user_id_3')->nullable();
            $table->tinyInteger('user_id_4')->nullable();
            $table->tinyInteger('user_id_5')->nullable();
            $table->tinyInteger('user_id_6')->nullable();
            $table->tinyInteger('user_id_7')->nullable();
            $table->tinyInteger('user_id_8')->nullable();
            $table->tinyInteger('user_id_9')->nullable();
            $table->tinyInteger('user_id_10')->nullable();
            $table->string('deck'); // 牌堆，一个数组
            $table->string('user_status_1');
            $table->string('user_status_2');
            $table->string('user_status_3');
            $table->string('user_status_4');
            $table->string('user_status_5');
            $table->string('user_status_6');
            $table->string('user_status_7');
            $table->string('user_status_8');
            $table->string('user_status_9');
            $table->string('user_status_10');
            $table->tinyInteger('current_user')->nullable();
            $table->tinyInteger('action')->nullable();
            $table->tinyInteger('target_user')->nullable();
            $table->tinyInteger('changed_card1')->nullable();
            $table->tinyInteger('changed_card2')->nullable();
            $table->tinyInteger('current_decider')->nullable();
            $table->string('attack_helper')->nullable();
            $table->string('defend_helper')->nullable();
            $table->string('battle_disabled_user')->nullable();
            $table->tinyInteger('battle_winner')->nullable();
            $table->tinyInteger('battle_loser')->nullable();
            $table->tinyInteger('battle_postaction')->nullable();
            $table->tinyInteger('max_card')->default(8);
            $table->tinyInteger('status')->default(0)->unsigned(); // 0 -- 准备中，>=1 -- 已经开始
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
        Schema::dropIfExists('games');
    }
}
