<?php

use Faker\Generator as Faker;
use Faker\Provider\Lorem as Lorem;



$factory->define(App\Category::class, function (Faker $faker) {
$Lorem = new Lorem($faker)
    return [
        'name' => $faker->name,
        'description' => $faker->lorem->words(10, true),
       
    ];
});
