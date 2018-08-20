<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Admin::class, function (Faker $faker) {
    static $password;
    return [
        'id'             => $faker->uuid,
        'name'           => $faker->name,
        'email'          => $faker->unique()->safeEmail,
        'password'       => $password ?: $password = bcrypt('123456'),
        'login_ip'       => $faker->ipv4,
        'remember_token' => str_random(10),
    ];
});
