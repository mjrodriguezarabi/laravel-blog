<?php

use Faker\Generator as Faker;
use App\Post;

$factory->define(Post::class, function (Faker $faker) {
    return [
        //
        'category_id'		=> $faker->numberBetween(1,20),
        'title'				=> $faker->sentence,
        'excerpt'			=> $faker->paragraph,
        'body'				=> $faker->text(400),
        'published_at'		=> $faker->dateTimeThisYear('now', 'Europe/Madrid'),
    ];
});
