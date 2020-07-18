<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use App\Post;
use App\User;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'post_id' => Post::all()->random()->post_id,
        'comment_id' => rand(1,20),
        'user_id' => User::all()->random()->id,
        'body' => Str::random(20),
    ];
});
