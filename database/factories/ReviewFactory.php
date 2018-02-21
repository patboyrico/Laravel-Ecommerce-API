<?php

use Faker\Generator as Faker;
use App\Review;
use App\Product;

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

$factory->define(App\Review::class, function (Faker $faker) {

    return [
        'product_id' => function(){
            return Product::all()->random();
        },
        'star' => $faker->numberBetween($min = 1, $max = 5),
        'review' => $faker->text($maxNbChars = 180) , 
    ];
});