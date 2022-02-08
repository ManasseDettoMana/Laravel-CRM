<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Employment;
use App\Models\Agency;
use Illuminate\Support\Arr;

class EmploymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
       $ag_id = Agency::pluck('id')->toArray();
       $ag_nome = Agency::pluck('nome')->toArray();

        for($i = 0; $i < 50; $i++){

            $newEmp = new Employment();

            $id_singolo = Arr::random($ag_id);

            $newEmp->agency_id = $id_singolo;
            $newEmp->azienda = $ag_nome[array_search($id_singolo, $ag_id)];
            $newEmp->azienda = 
            $newEmp->nome = $faker->name();
            $newEmp->cognome = $faker->lastname();

            $newEmp->cell = $faker->randomNumber(9, true);
            $newEmp->mail = $faker->safeEmail();
            
            $newEmp->save();
        }
    }
}
