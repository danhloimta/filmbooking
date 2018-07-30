<?php

use Faker\Generator as Faker;

$factory->define(App\Theater::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'phone' => $faker->e164PhoneNumber,
        'address' => $faker->address,
        'description' => str_random(50),
        'created_at' => new DateTime,
        'updated_at' => new DateTime,
    ];
});
