<?php

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        User::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 10; $i++) {
            User::create([
                'id' => $i,
                'login' => $faker->userName,
                // TODO: make it safe
                'password' => $faker->password,
                'name' => $faker->firstName,
                'surname' => $faker->lastName,
                'Role' => $faker->numberBetween(1,2),
            ]);
        }
    }
}
