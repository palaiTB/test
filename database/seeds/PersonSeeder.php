<?php

use Illuminate\Database\Seeder;
use App\Person;
use Illuminate\Support\Facades\DB;
class PersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for ($i=0;$i<5000;$i++)
        {
            DB::table('people')->insert([
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'title' => $faker->title,
                'company' => $faker->company,
                'phone' => $faker->phoneNumber,
                'email' => $faker->email,
                'address' => $faker->address,
                'address_2' => $faker->secondaryAddress,
                'city' => $faker->city,
                'state' => $faker->state,
                'zipcode' => $faker->randomNumber(6),
                'photo' => 'yoyo.png'
            ]);
        }

        //
    }
}
