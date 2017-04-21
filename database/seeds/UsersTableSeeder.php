<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('users')->insert([
        // 	'user_name' => str_random(10),
        // 	'first_name' => str_random(10),
        // 	'middle_name' => str_random(10),
        // 	'last_name' => str_random(10),
        // 	'email' => str_random(10) . '@gmail.com',
        // 	'password' => bcrypt('secret'),
        // 	'phone' => str_random(10),
        // 	'suite' => str_random(10),
        // 	'address' => str_random(10),
        // 	'city' => str_random(10),
        // 	'pin' => str_random(10),
        // 	'state' => str_random(10),
        // 	]);

        factory(App\User::class, 50)->create();
    }
}
