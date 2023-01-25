<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersSeeder extends Seeder
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
            'name' => 'Mario',
            'email' => 'mario@mail.com',
            'password' => '1234'
        ]);

        User::create([
            'name' => 'Efrain',
            'email' => 'efrain@mail.com',
            'password' => '1234'
        ]);

        User::create([
            'name' => 'Moreno',
            'email' => 'moreno@mail.com',
            'password' => '1234'
        ]);

        User::create([
            'name' => 'Cartagena',
            'email' => 'cartagena@mail.com',
            'password' => '1234'
        ]);
    }
}
