<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name'=>'Admin',
                'email'=>'admin@admin.com',
                'password'=>Hash::make('admin'),
                'role'=>'Admin'
            ],
            [
                'name'=>'Justin',
                'email'=>'justin@admin.com',
                'password'=>Hash::make('justin'),
                'role'=>'Admin'
            ],
            [
                'name'=>'Users',
                'email'=>'user@user.com',
                'password'=>Hash::make('user'),
                'role'=>'Customer'
            ],
            [
                'name'=>'John Doe',
                'email'=>'john_doe@gmail.com',
                'password'=>Hash::make('johndoe'),
                'role'=>'Customer'
            ],
        ]);
    }
}
