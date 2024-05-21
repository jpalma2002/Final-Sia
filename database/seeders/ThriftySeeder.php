<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ThriftySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $thrifty = [
            [
                'image' => 'images/nike.webp',
                'brand_name' => 'Nike',
                'description' => 'Classic Vintage Nike Big Swoosh Windbreaker / Nike Jacket / 90s ',
                'price' => '2500',

            ],
            [
                'image' => 'images/ch.jpg',
                'brand_name' => 'Carhartt Detroit',
                'description' => 'Vintage vintage carhartt detroit jacket coffee brown | Grailed | ',
                'price' => '6999',

            ],
            [
                'image' => 'images/stussy.jpg',
                'brand_name' => 'Stussy',
                'description' => 'Vintage Stussy 90s Worldwide Hoodie',
                'price' => '3699',

            ],
            [
                'image' => 'images/carhartt.jpg',
                'brand_name' => 'Carhartt Workwear',
                'description' => 'Vintage 90s Carhartt Hoodie Work Jacket',
                'price' => '4500',

            ],
            [
                'image' => 'images/P0.jpg',
                'brand_name' => 'Liquid Blue',
                'description' => 'Vintage Liquid Blue Native American AOP Shirt',
                'price' => '7500',

            ],
            [
                'image' => 'images/IR.jpeg',
                'brand_name' => 'Iron Maiden',
                'description' => 'Iron Maiden AOP',
                'price' => '6000',

            ],
            [
                'image' => 'images/Jeff.jpg',
                'brand_name' => 'Nascar',
                'description' => 'Vintage Jeff Gordon Nascar AOP',
                'price' => '12500',

            ],
            [
                'image' => 'images/Ricky.webp',
                'brand_name' => 'Nascar',
                'description' => 'Vintage 90s Ricky Rudd Nascar Tide Team Racing',
                'price' => '14500',

            ],
            [
                'image' => 'images/LQ.jpg',
                'brand_name' => 'Liquid Blue',
                'description' => 'VINTAGE MEDUSA LIQUID BLUE AOP',
                'price' => '12000',

            ],
            [
                'image' => 'images/AOP.jpg',
                'brand_name' => 'Liqued Blue',
                'description' => 'Vintage T-Shirt Dragon AOP Liquid Blue 1996',
                'price' => '11500',

            ],
            [
                'image' => 'images/vntg.jpg',
                'brand_name' => 'Nike',
                'description' => 'Rare Vintage NIKE Big Swoosh Reversible Down Puffer Parka Jacket',
                'price' => '5000',

            ],

        ];

        foreach ($thrifty as $thrift) {
            DB::table('thrifties')->insert($thrift);
        }
    }
}
