<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

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

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});



//Admin table
$factory->define(App\admin::class, function (Faker $faker) {
    return [
      'role' => $faker->numberBetween(1,2),
    ];
});


$factory->define(App\tourist::class, function (Faker $faker) {
    return [
       'role' => $faker->numberBetween(1,2),
    ];
});

$factory->define(App\gallery::class, function (Faker $faker) {
    return [
        'gallery_name' => $faker->sentence(2),
        'description' => $faker->text(),
        'photo' => $faker->sentence(1),
    ];
});




$factory->define(App\places::class, function (Faker $faker) {
    return [
        'place_name' => $faker->sentence(1),

    ];
});

$factory->define(App\gallery::class, function (Faker $faker) {
    return [
        'hotel_name' => $faker->sentence(1),
        'ville' => $faker->text(),
        'num_room_availables' => $faker->numberBetween(1,3),
    ];
});
