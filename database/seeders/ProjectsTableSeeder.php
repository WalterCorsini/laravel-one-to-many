<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Type;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        // Array di tipi per il seeder di TypesTableSeeder
        $arrayTypes = [
            [
                'name' => 'science',
                'color' => 'green',
            ],
            [
                'name' => 'mathematics',
                'color' => 'blue',
            ],
            [
                'name' => 'informatics',
                'color' => 'red',
            ],
            [
                'name' => 'psychology',
                'color' => 'gold',
            ],
        ];

        // Ciclo foreach per creare e salvare i tipi
        foreach ($arrayTypes as $curType) {
            $type = new Type();
            $type->name = $curType['name'];
            $type->color = $curType['color'];
            $type->save();
        }



        // Genera progetti con dati casuali
        for ($i = 0; $i < 10; $i++) {
            $project = new Project();
            $project->title = $faker->sentence(3);
            $project->type_id = $faker->numberBetween(1,4);
            $project->description = $faker->text(255);
            $project->slug = Str::slug($project->title);
            $project->save();

        }

    }
}

// namespace Database\Seeders;

// use App\Models\Project;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
// use Illuminate\Database\Seeder;
// use Faker\Generator as Faker;
// use Illuminate\Support\Str;

// class ProjectsTableSeeder extends Seeder
// {
//     /**
//      * Run the database seeds.
//      */
//     public function run(Faker $faker): void
//     {
//         for ($i=0; $i < 10; $i++) {
//             $newItem = new Project();
//             $newItem->title = $faker->sentence(3);
//             $newItem->description = $faker->text(255);
//             $newItem->slug = Str::slug($newItem->title);
//             $newItem->save();
//         }
//     }
// }
