<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profiles')->insert([
            [
                'user_id'=>"1",
                'phonenumber'=>'012345678',
                'country'=>'Vietnam',
                'city'=>'Saigon',
                'address'=>'280 An Duong Vuong',
                'zipcode'=>70000
            ],
            [
                'user_id'=>"2",
                'phonenumber'=>'08215551234',
                'country'=>'Indonesia',
                'city'=>'Medan',
                'address'=>'Danau Toba',
                'zipcode'=>27321
            ],
            [
                'user_id'=>"3",
                'phonenumber'=>'42912345',
                'country'=>'United State of America',
                'city'=>'Seattle',
                'address'=>'Downtown Seattle ST 17',
                'zipcode'=>78231
            ],
            [
                'user_id'=>"4",
                'phonenumber'=>'032912345',
                'country'=>'China',
                'city'=>'Guangzhou',
                'address'=>'ST 23a',
                'zipcode'=>78213
            ],
        ]);
    }
}
