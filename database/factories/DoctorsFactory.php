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

$factory->define(App\Doctors::class, function (Faker $faker) {
    
    $rooms = App\Rooms::pluck('id')->toArray();
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'status' => "1",
        'room_id' =>  $faker->randomElement($rooms)
    ];
});
