<?php

namespace Database\Factories;
use App\Models\Konu;
use Illuminate\Database\Eloquent\Factories\Factory;

class KonuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Konu::class;

    public function definition()
    {
        return [
            'pointName'=>$this->faker->sentence(rand(3,7)),
           'opinion'=>$this->faker->text(2000),
            'Konu_photo_path'=>$this->faker->imageUrl($width = 640, $height = 480),
        ];
    }
}
