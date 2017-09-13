<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Rooms::class, function (Faker $faker) {
    
    return [
        'name' => $faker->name,
        'tower' => $faker->numberBetween($min = 1, $max = 2),
        'status' => "1",
        'description' =>  $faker->text
    ];
});
