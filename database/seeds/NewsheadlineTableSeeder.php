<?php

use Illuminate\Database\Seeder;

class NewsheadlineTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $LoopLimit = 10;

        for ($i = 0; $i < $LoopLimit; $i++) {

            DB::table('newsheadline')->insert([
                'NewsTitle' 			=> $faker->text($maxNbChars = 150),
                'NewsReporterName' 		=> $faker->name($gender = null|'male'|'female'),
                'NewsReportingArea' 	=> $faker->address,
                'NewsCategory' 			=> $faker->text($maxNbChars = 20),
                'NewsSmallDescription' 	=> $faker->text($maxNbChars = 300),
                'NewsDetailsUrl' 		=> $faker->url,
                // 'NewsDetailsUrl'        => "http://localhost:8000/newsDetails/api/v1/show/".$faker->unique()->numberBetween($min = 1, $max = 10)."/".$faker->url(),
                // 'NewsDetailsUrl'         => "http://localhost:8000/newsDetails/api/v1/show/5/1",
            ]);
        }
    }
}
