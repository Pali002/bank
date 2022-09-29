<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        
        $fake = \Fake\Factory::create();

        DB::table("person")->insert([
            "name" => $faker->name,
            "email" => $faker->email,
            "phone" => $faker->phone,
            "card" => $faker->card,
            "cardnumber" => $faker->cardnumber
        ]);
    }
}
