<?php

use Illuminate\Database\Seeder;
use App\Story;

class TagsTableSeeder extends Seeder {

	public function run() {
		$faker = Faker\Factory::create();
		
		$limit = 20;

		for ($i = 0; $i < $limit; $i++) {
			DB::table('tags')->insert([
				'value' => $faker->word,
			]);
		}

		$stories = App\Story::get();
		$array = array();

		for ($i = 0; $i < $limit; $i++) {
			$array[$i] = $i + 1;
		}

		foreach ($stories as $story) {
			# code...
			$story->tags()->attach($faker->randomElements($array, $count = 3));
		}
		
	}
}