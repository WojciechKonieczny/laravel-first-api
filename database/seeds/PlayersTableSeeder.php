<?php

use Illuminate\Database\Seeder;
use App\Player;

class PlayersTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $faker = \Faker\Factory::create();

        for($i = 0; $i < 100; $i ++) {
            $player = new Player();
            $player->firstname = $faker->firstName;
            $player->surname = $faker->name;
            $player->age = $faker->numberBetween(15,40);
            $player->save();
        }
    }
}
