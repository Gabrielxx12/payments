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
            'name'      => 'sdfdfdf Ldsfsdfd',
            'email'     => 'dsfsdfsdf@sdfsdfsdfsdf',
            'password'  => bcrypt('sdfsdfsdfsdfdf'),
        ]);

        User::create([
            'name'      => 'sdfsdfsdfsdf',
            'email'     => 'sdfdsfsdfsdf',
            'password'  => bcrypt('sdfdsfdfdfdfdsf'),
        ]);
    }
}
