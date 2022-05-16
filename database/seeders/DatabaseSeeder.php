<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
        $user            = new User();
        $user->name = "Admin";
        $user->email     = "ik@ma-web.nl";
        $user->password  = Hash::make( 'geheim' );
        $user->save();
    }
}
