<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Agency;

class AgencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
       for($i = 0; $i < 10; $i++){
            $newAgency = new Agency();
            $newAgency->nome = $faker->name();
            $newAgency->logo = $faker->url(300, 300, 'logo', true);
            $newAgency->p_iva = $faker->randomNumber(7, true);

            $newAgency->save();
        }    
    }
}
