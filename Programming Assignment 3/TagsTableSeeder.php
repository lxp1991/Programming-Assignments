<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder {

	public function run() {
		$faker = Faker\Factory::create();
		
		$limit = 20;

		for ($i = 0; $i < $limit; $i++) {
			DB::table('tags')->insert([
				'value' => $faker->word,
			]);
		}
		
	}
}