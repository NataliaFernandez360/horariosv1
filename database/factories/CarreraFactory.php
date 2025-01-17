<?php

namespace Database\Factories;

use App\Models\Depto;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Carrera>
 */
class CarreraFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $titulo=fake()->unique()->jobTitle();
        return [
            "idCarrera"=>fake()->unique()->bothify("????####"),
            "nombreCarrera"=>$titulo,
            "nombreMediano"=>fake()->lexify(str_repeat("?",15)),
            "nombreCorto"=>fake()->unique()->regexify('[A-Z]{3}[1-4]{2}'),
            "depto_id"=>Depto::factory(),
        ];
    }
}
