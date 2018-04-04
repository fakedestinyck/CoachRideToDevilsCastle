<?php

use Illuminate\Database\Seeder;

class OccupationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('occupations')->insert([
            'name' => '外交家',
            'description' => '游戏中限定一次。只能在自己回合使用。指定其他玩家和你交易某指定物品。如果该玩家没有这个物品，那么交易结束。同时如果该玩家宣称他没有这个物品，他必须将物品展示给使用本职业的玩家。本回合直接结束。',
            'is_only_once' => 1, // 0 -- multiple times; 1 -- only once
            'allowed_phase_timing' => "[1,23]",
            'allowed_phase_self_or_other' => 0, // 0 -- 自己的回合; 1 -- 别人的回合; 2 -- 都可以
            'allowed_battle_status' => 0,
            // 0 -- 不可使用; 1 -- 自己攻击; 2 -- 别人攻击; 3 -- 自己防御; 4 -- 别人防御; 5 -- 攻击; 6 -- 防御; 7 -- 自己; 8 -- 别人; 9 -- 都行
            'attack_value' => 0,
            'defend_value' => 0
        ]);

        DB::table('occupations')->insert([
            'name' => '医生',
            'description' => '游戏中限定一次。在争斗之后，你能立即阻止争斗的效果。医生不一定需要参加争斗，本特权导致胜利者无法从战败者的身上获得任何信息。也不能查看失败者的行李。胜利者的回合结束。',
            'is_only_once' => 1, // 0 -- multiple times; 1 -- only once
            'allowed_phase_timing' => "[12]",
            'allowed_phase_self_or_other' => 2, // 0 -- 自己的回合; 1 -- 别人的回合; 2 -- 都可以
            'allowed_battle_status' => 9,
            // 0 -- 不可使用; 1 -- 自己攻击; 2 -- 别人攻击; 3 -- 自己防御; 4 -- 别人防御; 5 -- 攻击; 6 -- 防御; 7 -- 自己; 8 -- 别人; 9 -- 都行
            'attack_value' => 0,
            'defend_value' => 0
        ]);

        DB::table('occupations')->insert([
            'name' => '决斗者',
            'description' => '游戏中限定一次。作为攻击者或者防御者，你可以指定这场争斗没有任何支援者。你可以获得'.'+1'.'的争斗结算。此能力可以在所有其他玩家都决定是否参战甚至用完道具后再使用。',
            'is_only_once' => 1, // 0 -- multiple times; 1 -- only once
            'allowed_phase_timing' => "[11]",
            'allowed_phase_self_or_other' => 2, // 0 -- 自己的回合; 1 -- 别人的回合; 2 -- 都可以
            'allowed_battle_status' => 7,
            // 0 -- 不可使用; 1 -- 自己攻击; 2 -- 别人攻击; 3 -- 自己防御; 4 -- 别人防御; 5 -- 攻击; 6 -- 防御; 7 -- 自己; 8 -- 别人; 9 -- 都行
            'attack_value' => 1,
            'defend_value' => 1
        ]);

        DB::table('occupations')->insert([
            'name' => '调毒师',
            'description' => '游戏中限定一次。你可以指定争斗中的胜利者。但是你不可以是这场争斗的任何一方。此能力可以在所有其他玩家都决定是否参战甚至用完道具后再使用。',
            'is_only_once' => 1, // 0 -- multiple times; 1 -- only once
            'allowed_phase_timing' => "[11]",
            'allowed_phase_self_or_other' => 2, // 0 -- 自己的回合; 1 -- 别人的回合; 2 -- 都可以
            'allowed_battle_status' => 8,
            // 0 -- 不可使用; 1 -- 自己攻击; 2 -- 别人攻击; 3 -- 自己防御; 4 -- 别人防御; 5 -- 攻击; 6 -- 防御; 7 -- 自己; 8 -- 别人; 9 -- 都行
            'attack_value' => 0,
            'defend_value' => 0
        ]);

        DB::table('occupations')->insert([
            'name' => '武术宗师',
            'description' => '如果你是防御者，增加一点争斗结算。此能力可以在所有其他玩家都决定是否参战甚至用完道具后再使用。',
            'is_only_once' => 0, // 0 -- multiple times; 1 -- only once
            'allowed_phase_timing' => "[11]",
            'allowed_phase_self_or_other' => 0, // 0 -- 自己的回合; 1 -- 别人的回合; 2 -- 都可以
            'allowed_battle_status' => 3,
            // 0 -- 不可使用; 1 -- 自己攻击; 2 -- 别人攻击; 3 -- 自己防御; 4 -- 别人防御; 5 -- 攻击; 6 -- 防御; 7 -- 自己; 8 -- 别人; 9 -- 都行
            'attack_value' => 0,
            'defend_value' => 1
        ]);

        DB::table('occupations')->insert([
            'name' => '先知',
            'description' => '游戏中限定一次。在你的回合，你可以查看物品推并且取出两样物品，将其他牌洗匀后，任意将着两张牌放在物品堆上。',
            'is_only_once' => 1, // 0 -- multiple times; 1 -- only once
            'allowed_phase_timing' => "[1,23]",
            'allowed_phase_self_or_other' => 0, // 0 -- 自己的回合; 1 -- 别人的回合; 2 -- 都可以
            'allowed_battle_status' => 0,
            // 0 -- 不可使用; 1 -- 自己攻击; 2 -- 别人攻击; 3 -- 自己防御; 4 -- 别人防御; 5 -- 攻击; 6 -- 防御; 7 -- 自己; 8 -- 别人; 9 -- 都行
            'attack_value' => 0,
            'defend_value' => 0
        ]);

        DB::table('occupations')->insert([
            'name' => '催眠师',
            'description' => '如果你是攻击者，你可以指定某个玩家不能支援争斗。即使在他宣告支援之后。这个特权只能在玩家宣告支援时立刻使用，该宣告不会产生任何作用。这表示在物品、职业之前。被指定的玩家在这场争斗中不可以使用职业或者物品。',
            'is_only_once' => 0, // 0 -- multiple times; 1 -- only once
            'allowed_phase_timing' => "[9]",
            'allowed_phase_self_or_other' => 0, // 0 -- 自己的回合; 1 -- 别人的回合; 2 -- 都可以
            'allowed_battle_status' => 1,
            // 0 -- 不可使用; 1 -- 自己攻击; 2 -- 别人攻击; 3 -- 自己防御; 4 -- 别人防御; 5 -- 攻击; 6 -- 防御; 7 -- 自己; 8 -- 别人; 9 -- 都行
            'attack_value' => 0,
            'defend_value' => 0
        ]);

        DB::table('occupations')->insert([
            'name' => '保镖',
            'description' => '如果你在争斗中支持某人，他将获得'."+1".'的斗争结算。此能力不能用来支援自己。',
            'is_only_once' => 0, // 0 -- multiple times; 1 -- only once
            'allowed_phase_timing' => "[10]",
            'allowed_phase_self_or_other' => 1, // 0 -- 自己的回合; 1 -- 别人的回合; 2 -- 都可以
            'allowed_battle_status' => 8,
            // 0 -- 不可使用; 1 -- 自己攻击; 2 -- 别人攻击; 3 -- 自己防御; 4 -- 别人防御; 5 -- 攻击; 6 -- 防御; 7 -- 自己; 8 -- 别人; 9 -- 都行
            'attack_value' => 1,
            'defend_value' => 1
        ]);

        DB::table('occupations')->insert([
            'name' => '神父',
            'description' => '游戏中限定一次。在其他玩家宣告支援前阻止争斗。如果攻击者至少有两样物品，则选择一样给你。攻击者回合结束。神父只能在玩家宣布支援之前使用。他本身不必涉身到争斗中。',
            'is_only_once' => 1, // 0 -- multiple times; 1 -- only once
            'allowed_phase_timing' => "[7]",
            'allowed_phase_self_or_other' => 2, // 0 -- 自己的回合; 1 -- 别人的回合; 2 -- 都可以
            'allowed_battle_status' => 9,
            // 0 -- 不可使用; 1 -- 自己攻击; 2 -- 别人攻击; 3 -- 自己防御; 4 -- 别人防御; 5 -- 攻击; 6 -- 防御; 7 -- 自己; 8 -- 别人; 9 -- 都行
            'attack_value' => 0,
            'defend_value' => 0
        ]);

        DB::table('occupations')->insert([
            'name' => '刺客',
            'description' => '如果你是攻击者，可获得'."+1".'的争斗结算。在防御或者支援的时候没有效果。',
            'is_only_once' => 0, // 0 -- multiple times; 1 -- only once
            'allowed_phase_timing' => "[10]",
            'allowed_phase_self_or_other' => 0, // 0 -- 自己的回合; 1 -- 别人的回合; 2 -- 都可以
            'allowed_battle_status' => 1,
            // 0 -- 不可使用; 1 -- 自己攻击; 2 -- 别人攻击; 3 -- 自己防御; 4 -- 别人防御; 5 -- 攻击; 6 -- 防御; 7 -- 自己; 8 -- 别人; 9 -- 都行
            'attack_value' => 1,
            'defend_value' => 0
        ]);
    }
}
