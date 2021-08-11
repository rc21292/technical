<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::insert([
            'name' => 'user',
            'email' => 'user@user.com',
            'password' => bcrypt('12345'),
            'is_admin' => false
        ]);
        App\User::insert([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('12345'),
            'is_admin' => true,
        ]);

    }
}
