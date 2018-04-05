<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\User::class, 20)->create();

        Models\Role::create([
            'name' => 'Admin',
            'slug' => 'admin',
            'special' => 'all-access'
        ]);
    }
}
