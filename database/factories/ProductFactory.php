<?php

use Faker\Generator as Faker;
use App\Product;
use App\Admin;

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

$factory->define(App\Product::class, function (Faker $faker) {

    return [
        'admin_id' => function(){
            return Admin::all()->random();
        },
        'name' => $faker->word,
        'description' => $faker->text($maxNbChars = 180) ,
        'image_url' => $faker->imageUrl($width = 640, $height = 480),
        'price' => $faker->numberBetween($min = 100, $max = 900), 
        'discount' => $faker->numberBetween(0, 50),        
    ];
});
