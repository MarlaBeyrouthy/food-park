<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Hash;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    protected static ?string $password;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            [
                'name'=> 'Admin',
                'email'=>'admin@gmail.com',
                'role'=>'admin',
                'password'=>bcrypt('12341234')
            ]
            ,
            [
                'name'=> 'User',
                'email'=>'user@gmail.com',
                'role'=>'user',
                'password'=>bcrypt('12341234')

            ]
            ]);
    }
}
