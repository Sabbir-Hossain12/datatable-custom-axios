<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 1000; $i++) {
            $user= new User();
            $user->name= fake()->name();
            $user->email= fake()->email();
            $user->mobile= fake()->phoneNumber();
            $user->password= Hash::make('password');
            $user->save();
        }
        
    }
}
