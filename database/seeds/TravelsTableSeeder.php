<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Travel;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 20; $i++) {
            $travel = new Travel();
            
            $travel->trip_names = $faker->sentence(5);
            $travel->destinations = $faker->country();
            $travel->nights = $faker->numberBetween(1, 21);
            $travel->stay_addresses = $faker->streetAddress();
            $travel->adults = $faker->numberBetween(1, 4);
            $travel->children = $faker->numberBetween(0, 4);
            $travel->rooms = $faker->numberBetween(1, 4);
            $travel->dates = $faker->dateTimeThisYear('+9 months');
            $travel->flight_included = $faker->boolean();
            $travel->brakfast_included = $faker->boolean();
            $travel->prices = $faker->randomFloat(2, 300, 7000);

            $travel->save();
        }
    }
}
