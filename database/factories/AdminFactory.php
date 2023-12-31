<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Admin>
 */
class AdminFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            // 'email_verified_at' => now(),
            'password' => $this->faker->password(),
            // 'remember_token' => Str::random(10),
            // images is json multi images add 3 images in json
            'images' => json_encode([
                'image1' => $this->faker->imageUrl(),
                'image2' => $this->faker->imageUrl(),
                'image3' => $this->faker->imageUrl(),
            ]),

        ];
    }
}
