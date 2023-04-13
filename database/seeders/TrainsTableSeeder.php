<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $azienda=['Trenitalia SpA', 'Trentino Trasporti Esercizio Srl', 'Trenord SpA', 'Impresa Ferroviaria Italiana'];
        

        for($i = 0; $i<100; $i++){
            $new_train = new Train();
            //$orario_di_partenza = $faker->dateTime();

            $new_train->azienda = $faker->randomElement($azienda);
            $new_train->stazione_di_partenza = $faker->city();
            $new_train->stazione_di_arrivo = $faker->city();
            $new_train->orario_di_partenza = $faker->dateTime();
            $new_train->orario_di_arrivo = $faker->dateTimeInInterval($new_train->orario_di_partenza, '+10 hour' );
            $new_train->codice_treno = $faker->bothify('########');
            $new_train->numero_carrozze = $faker->numberBetween(1,5);
            $new_train->in_orario = $faker->randomElement([0, 1]);
            $new_train->cancellato = $faker->randomElement([0, 1]);
            $new_train->save();
        }
    }
}
