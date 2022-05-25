<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name'=>'AIR JORDAN 1 X OFF-WHITE NRG "OFF WHITE UNC"',
                'brand'=>'Nike',
                'price'=>1375,
                'image'=>'products/1.jpg',
                'gender'=>'Female',
                'category'=>'Shoes'
            ],
            [
                'name'=>'STUSSY X AIR ZOOM SPIRIDON CAGED "PURE PLATINUM"',
                'brand'=>'Nike',
                'price'=>225,
                'image'=>'products/2.jpg',
                'gender'=>'Unisex',
                'category'=>'Shoes'
            ],
            [
                'name'=>'SUPREME X AIR FORCE 1 LOW "BOX LOGO - WHITE"',
                'brand'=>'Nike',
                'price'=>275,
                'image'=>'products/3.jpg',
                'gender'=>'Male',
                'category'=>'Shoes'
            ],
            [
                'name'=>'SACAI X LDV WAFFLE "BLACK NYLON"',
                'brand'=>'Nike',
                'price'=>190,
                'image'=>'products/4.jpg',
                'gender'=>'Male',
                'category'=>'Shoes'
            ],
            [
                'name'=>'AIR JORDAN 1 RETRO HIGH "SHATTERED BACKBOARD"',
                'brand'=>'Nike',
                'price'=>980,
                'image'=>'products/5.jpg',
                'gender'=>'Male',
                'category'=>'Shoes'
            ],
            [
                'name'=>'YEEZY BOOST 350 V2 "CREAM"',
                'brand'=>'Adidas',
                'price'=>780,
                'image'=>'products/6.jpg',
                'gender'=>'Unisex',
                'category'=>'Shoes'
            ],
            [
                'name'=>'YEEZY BOOST 350 V2"YECHEIL NON-REFLECT"',
                'brand'=>'Adidas',
                'price'=>978,
                'image'=>'products/7.jpg',
                'gender'=>'Male',
                'category'=>'Shoes'
            ],
            [
                'name'=>'YEEZY BOOST 350 V2 "FROZEN YELLOW"',
                'brand'=>'Adidas',
                'price'=> 1100,
                'image'=>'products/8.jpg',
                'gender'=>'Unisex',
                'category'=>'Shoes'
            ],
            [
                'name'=>'AIR JORDAN 5 RETRO SP "MUSLIN"',
                'brand'=>'Nike',
                'price'=> 1499,
                'image'=>'products/9.jpg',
                'gender'=>'Male',
                'category'=>'Shoes'
            ],
            [
                'name'=>'AIR JORDAN 1 RETRO HIGH ZOOM "RACER BLUE"',
                'brand'=>'Nike',
                'price'=> 625,
                'image'=>'products/10.jpg',
                'gender'=>'Male',
                'category'=>'Shoes'
            ],
            [
                'name'=>'FENTY SLIDE "PINK BOW "',
                'brand'=>'Puma',
                'price'=> 399,
                'image'=>'products/11.jpg',
                'gender'=>'Female',
                'category'=>'Shoes'
            ],
            [
                'name'=>'WMNS RS-X TRACKS "FAIR AQUA"',
                'brand'=>'Puma',
                'price'=> 499,
                'image'=>'products/12.jpg',
                'gender'=>'Female',
                'category'=>'Shoes'
            ],
            [
                'name'=>'OLD SKOOL \'BLACK WHITE\' "BLACK WHITE"',
                'brand'=>'Vans',
                'price'=> 239,
                'image'=>'products/13.jpg',
                'gender'=>'Unisex',
                'category'=>'Shoes'
            ],
            [
                'name'=>'OLD SKOOL "YACHT CLUB"',
                'brand'=>'Vans',
                'price'=> 359,
                'image'=>'products/14.jpg',
                'gender'=>'Unisex',
                'category'=>'Shoes'
            ],
            [
                'name'=>'VANS OLD SKOOL "RED CHECKERBOARD "',
                'brand'=>'Vans',
                'price'=> 419,
                'image'=>'products/15.jpg',
                'gender'=>'Unisex',
                'category'=>'Shoes'
            ],
            [
                'name'=>'ALL STAR 70S HI "MILK"',
                'brand'=>'Converse',
                'price'=> 579,
                'image'=>'products/16.jpg',
                'gender'=>'Unisex',
                'category'=>'Shoes'
            ],
            [
                'name'=>'ALL-STAR 70S HI "PLAY"',
                'brand'=>'Puma',
                'price'=> 619,
                'image'=>'products/17.jpg',
                'gender'=>'Unisex',
                'category'=>'Shoes'
            ],
            [
                'name'=>'FEAR OF GOD CHUCK 70 HI "NATURAL"',
                'brand'=>'Converse',
                'price'=> 1259,
                'image'=>'products/18.jpg',
                'gender'=>'Female',
                'category'=>'Shoes'
            ],
        ]);
    }
}
