<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'post_id' => rand(1,5),
        'user_id' => User::all()->random()->id,
        'title' => Str::random(10),
    ];
});
