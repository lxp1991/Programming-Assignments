<?php

use Illuminate\Database\Seeder;

class StoriesTableSeeder extends Seeder {

	public function run() {
		$faker = Faker\Factory::create();
		
		$limit = 20;

		for ($i = 0; $i < $limit; $i++) {
			$randomNumber = $faker->randomDigitNotNull;
			$title = $faker->sentence($randomNumber, true);

			DB::table('stories')->insert([
				'title' => $title,
				'story' => $faker->realText,//$faker->text(500),
				'published' => (rand(0, 1) == 1),
			]);
		}
		
	}
}