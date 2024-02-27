<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Train;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // Svuoto la tabella
        Train::truncate();

        //Riempio la tabella
        for ($i = 0; $i < 20; $i++) {

            $train = new Train();
            // Ne riempio le colonne
            $train->company = fake()->words(rand(1,3), true);
            $train->departure_station = fake()->words(rand(1,3), true);
            $train->arrival_station = fake()->words(rand(1,3), true);
            $train->departure_hour = fake()->date('Y_m_d').' '.fake()->time();
            $train->arrival_hour = fake()->date('Y_m_d').' '.fake()->time();
            $train->train_code = fake()->randomNumber(5, true).fake()->randomLetter(5, true);
            $train->carriages_number = fake()->numberBetween(5, 24);
            $train->on_time = fake()->boolean();
            $train->deleted = fake()->boolean();
            // Lo salvo in persistenza
            $train->save();

        }

    }
}
