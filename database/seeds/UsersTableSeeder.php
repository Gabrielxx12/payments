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
            'name'      => 'Gabriel Lopes',
            'email'     => 'gabriel@laravel.com',
            'password'  => bcrypt('123456'),
        ]);

        User::create([
            'name'      => 'Gabriel Silva',
            'email'     => 'gabriel2@laravel.com',
            'password'  => bcrypt('123456'),
        ]);
    }
}
