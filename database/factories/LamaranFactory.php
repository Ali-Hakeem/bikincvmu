<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lamaran>
 */
class LamaranFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'kota' => $this->faker->city(),
            'tanggal' => $this->faker->date($format='Y-m-d'),
            'pt' => $this->faker->company(),
            'alamatpt' => $this->faker->address(),
            'loker' => $this->faker->jobTitle(),
            'nama' => $this->faker->name(),
            'tempatlahir' => $this->faker->city(),
            'tanggallahir' => $this->faker->date($format='Y-m-d', $max='now'),
            'jeniskelamin' => $this->faker->title($gender = 'male'|'female'),
            'pendidikan' => $this->faker->catchPhrase (),
            'alamat'    => $this->faker->address(),
            'hp'     => $this->faker->phoneNumber(),
            'lampiran'     => $this->faker->text(),
        ];
    }
}
