<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Jordan Sedano',
            'email' => 'yordan.arcangel@gmail.com',
            'password' => bcrypt('secret')
        ]);
    }
}
