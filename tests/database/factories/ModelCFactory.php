<?php

declare(strict_types=1);

namespace Deligoez\LaravelModelHashIDs\Tests\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Deligoez\LaravelModelHashIDs\Tests\Models\ModelC;

class ModelCFactory extends Factory
{
    protected $model = ModelC::class;

    public function definition(): array
    {
        return [
            'slug' => $this->faker->slug,
        ];
    }
}
