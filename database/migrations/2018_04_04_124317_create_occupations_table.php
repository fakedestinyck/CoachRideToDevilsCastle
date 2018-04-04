<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOccupationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('occupations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('description');
            $table->tinyInteger('is_only_once'); // 0 -- multiple times; 1 -- only once
            $table->string('allowed_phase_timing');
            $table->tinyInteger('allowed_phase_self_or_other'); // 0 -- 自己的回合; 1 -- 别人的回合; 2 -- 都可以
            $table->tinyInteger('allowed_battle_status');
            // 0 -- 不可使用; 1 -- 自己攻击; 2 -- 别人攻击; 3 -- 自己防御; 4 -- 别人防御; 5 -- 攻击; 6 -- 防御; 7 -- 自己; 8 -- 别人; 9 -- 都行
            $table->tinyInteger('attack_value')->default(0);
            $table->tinyInteger('defend_value')->default(0);
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
        Schema::dropIfExists('occupations');
    }
}
