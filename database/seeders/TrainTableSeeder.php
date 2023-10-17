<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Train;

use Faker\Generator as Faker;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i <10; $i++) {
        $train = new Train();
        $train-> azienda = $faker->words(2,true);
        $train-> stazione_di_partenza = $faker->city();
        $train-> stazione_di_arrivo = $faker->city();
        $train-> data_di_partenza = $faker-> date('Y-m-d', 'now');
        $train-> orario_di_partenza = $faker->time();
        $train-> orario_di_arrivo = $faker->dateTimeBetween( $train-> orario_di_partenza, '+1 day');
        $train-> codice_treno = $faker->randomNumber(8, true);
        $train-> numero_di_carrozze = $faker->numberBetween(4, 12);
        $train->save();
        
        }

    }
}