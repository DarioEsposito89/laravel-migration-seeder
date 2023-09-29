<?php

namespace Database\Seeders;

// Importato Model
use App\Models\Train;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Usato Faker
use Faker\Generator as Faker;


class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker)
    {
        for($i=0; $i<=10; $i++){

            $newTrain = new Train();
            $newTrain->azienda = $faker->company();
            $newTrain->stazione_di_partenza = $faker->city();
            $newTrain->stazione_di_arrivo = $faker->city();
            $newTrain->orario_di_partenza = $faker->time('H:i');
            $newTrain->orario_di_arrivo = $faker->time('H:i');
            $newTrain->codice_treno = $faker->numerify();
            $newTrain->numero_carrozze = $faker->randomDigit('ct-????');
            $newTrain->treno_in_orario = $faker->randomElement([true, false]);
            $newTrain->treno_cancellato = $faker->randomElement([true, false]);
            $newTrain->save();
        }
    }
}
