<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $user = \App\Models\User::create([
            'name' => 'super user',
            'email' => 'super_admin@app.com',
            'password' => bcrypt('123')
        ]);

        $user_two = \App\Models\User::create([
            'name' => 'GH.Houssam',
            'email' => 'foo@app.com',
            'password' => bcrypt('123')
        ]);

        $user->attachRole('super_admin');
        $user_two->attachRole('User');
    }// end of run
}// end of Seeder
