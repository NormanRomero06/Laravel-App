<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\curso;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
                //     'email' => 'test@example.com',
        // ]);

        $curso = new Curso();
        $curso->name =  "Laravel";
        $curso->descripton = "Online";
        $curso->categoria = "Virtual";
        $curso->save();


        $curso1 = new Curso();
        $curso1->name =  "Java";
        $curso1->descripton = "POO";
        $curso1->categoria = "Virtual";
        $curso1->save();


        $curso3 = new Curso();
        $curso3->name =  "Kotlin";
        $curso3->descripton = "Interfaz";
        $curso3->categoria = "Bimodal";
        $curso3->save();
    }
}
