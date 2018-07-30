<?php

use Faker\Generator as Faker;

$factory->define(App\Room::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'num_row' => $faker->randomDigit,
        'num_seat' => $faker->randomDigit,
        'theater_id' => factory(App\Theater::class)->create()->id,
        'created_at' => new DateTime,
        'updated_at' => new DateTime,
    ];
});
