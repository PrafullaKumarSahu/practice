<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
// $factory->define(App\User::class, function (Faker\Generator $faker) {
//     static $password;

//     return [
//         'name' => $faker->name,
//         'email' => $faker->unique()->safeEmail,
//         'password' => $password ?: $password = bcrypt('secret'),
//         'remember_token' => str_random(10),
//     ];
// });

$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'user_name'      => $faker->userName,
        'first_name'     => $faker->firstName(),
        'middle_name'    => $faker->word,
        'last_name'      => $faker->lastName(),
        'email'          => $faker->unique()->safeEmail,
        'password'       => $password ?: $password = bcrypt('secret'),
        'phone'          => $faker->phoneNumber,
        'suite'          => $faker->streetAddress,
        'address'        => $faker->address,
        'city'           => $faker->city,
        'pin'            => $faker->postcode,
        'state'          => $faker->state,
        'remember_token' => str_random(10),
    ];
});
