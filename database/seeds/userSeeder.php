<?php

use Illuminate\Database\Seeder;
use App\User;


class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'name'           => 'Admin',
            'email'          => 'admin@admin.com',
            'password'       => bcrypt('password'),
            'remember_token' => Str::random(60),
            'role'        =>   User::ADMIN_ROLE,
        ]);
    }
}
