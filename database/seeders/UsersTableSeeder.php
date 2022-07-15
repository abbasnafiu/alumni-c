<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
//namespace Database\Seeders;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //namespace Database\Seeders;
        User::create([
            'name'              =>      'abbas nafiu',
            'email'             =>       'nafiumuhd@yahoo.com',
            'password'          =>         Hash::make('password'),
            'remember_token'    =>          str_random(10)
        ]);
    }
}
