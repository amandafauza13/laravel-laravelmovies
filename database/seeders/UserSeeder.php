<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            'name' => 'Coder Pemula',
            'email' => 'coder@pemula.us',
            'password' => \bcrypt('coderpemula')
        ];

        User::create(['name' => 'Coder Pemula',
            'email' => 'coder@pemula.us',
            'password' => \bcrypt('coderpemula')]);
    }
}
