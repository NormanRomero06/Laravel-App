<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Curso;
use Illuminate\Database\Eloquent\Model;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Curso>
 */
class CursoFactory extends Factory
{
    /**

     *
     * @return array<string, mixed>
     */
    protected $model = Curso::class;

    public function definition(): array
    {
        return [
           'name' => $this->faker->sentence(),
           'descripton' =>$this->faker->paragraph(),
           'categoria' =>$this->faker->randomElement(['Desarrollo web','POO web'])
        ];
    }
}
