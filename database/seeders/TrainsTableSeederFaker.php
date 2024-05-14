<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

$faker = new Faker();
class TrainsTableSeederFaker extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for($i = 0; $i < 20; $i++){
            $new_train = new Train();
            $new_train->company = $faker->domainWord();
            $new_train->slug = $faker->slug(2);
            $new_train->firstStation = $faker->city();
            $new_train->lastStation = $faker->city();
            $new_train->arrivingTime = $faker->time();
            $new_train->trainCode = $faker->randomNumber(5, true);
            $new_train->vagonNumber = $faker->randomDigitNotNull();
            $new_train->is_onTime = $faker->boolean();
            $new_train->is_cancelled = $faker->boolean();

            $new_train->save();
        }
    }
}
