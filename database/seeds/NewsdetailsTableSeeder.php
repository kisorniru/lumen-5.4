<?php

use Illuminate\Database\Seeder;
use App\NewsHeadLine as NewsHeadLine;

class NewsdetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();        

        $NewsHeadLineId = NewsHeadLine::all()->pluck('id')->toArray();
        $LoopLimit = 10;

        for ($i = 0; $i < $LoopLimit; $i++) {

            DB::table('newsdetails')->insert([
                'NewsHeadLineId'    => $faker->unique()->randomElement($NewsHeadLineId),
                'NewsDetails'       => $faker->text($maxNbChars = 2000),
                'NewsImagesUrl'     => $faker->imageUrl(640, 480, 'cats', true, 'Faker', true),
            ]);
        }
    }
}
