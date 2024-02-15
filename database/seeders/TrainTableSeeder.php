<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train as Train; 
use Faker\Generator as Faker;
use Faker\Provider\it_IT\Address;
use Faker\Provider\it_IT\Company;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 30; $i++){
            $new_train = new Train();
            $new_train->agency = $faker->company();
            $new_train->departure_station = $faker->city();
            $new_train->arrival_station = $faker->city();
            $new_train->departure_time = $faker->time();
            $new_train->arrival_time = $faker->time();
            $new_train->train_code = $faker->randomNumber(4, true);
            $new_train->number_carriages = $faker->numberBetween(0, 16);
            $new_train->punctual = $faker->numberBetween(0, 1);
            $new_train->deleted = $faker->numberBetween(0, 1);
            $new_train->save();
        }
    }
}
