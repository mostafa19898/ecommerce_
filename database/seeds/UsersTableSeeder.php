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


        $user = new User;
        $user->name = "Admin";
        $user->email = "admin@admin.com";
        $user->password = bcrypt('secret');
        $user->is_admin = true;
        $user->save();

    }
}
