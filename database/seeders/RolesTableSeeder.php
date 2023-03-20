<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $superAdmin = \App\Models\Role::create([
            'name' => 'super_admin',
            'display_name' => 'super admin',
            'description' => 'do any thing of project'
        ]);

        $user = \App\Models\Role::create([
            'name' => 'User',
            'display_name' => 'user',
            'description' => 'do specific project'
        ]);
    }//end of run
}// end of seeder
