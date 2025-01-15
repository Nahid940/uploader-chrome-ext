<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $products = [
            [
                'title' => 'Wireless Mouse',
                'price' => 25.99,
                'description' => 'A reliable and ergonomic wireless mouse with long battery life.',
                'image' => 'https://i.ebayimg.com/thumbs/images/g/eLcAAOSwhdlnDkDF/s-l960.webp',
                'code' => 111111,
            ],
            [
                'title' => 'Bluetooth Headphones',
                'price' => 59.99,
                'description' => 'Noise-cancelling Bluetooth headphones with superior sound quality.',
                'image' => 'https://i.ebayimg.com/thumbs/images/g/utoAAOSwgkFnXrVm/s-l960.webp',
                'code' => 222222,
            ],
            [
                'title' => 'Gaming Keyboard',
                'price' => 89.99,
                'description' => 'Mechanical gaming keyboard with customizable RGB lighting.',
                'image' => 'hhttps://i.ebayimg.com/images/g/O8EAAOSwzHNiBwkf/s-l1600.webp',
                'code' => 333333,
            ],
            [
                'title' => 'Smartphone Stand',
                'price' => 14.99,
                'description' => 'Adjustable smartphone stand for hands-free operation.',
                'image' => 'https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-z-fold-special-edition.jpg',
                'code' => 444444,
            ],
            [
                'title' => 'USB-C Hub',
                'price' => 39.99,
                'description' => 'Multi-port USB-C hub for connecting multiple devices.',
                'image' => 'https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-z-fold-special-edition.jpg',
                'code' => 555555,
            ],
            [
                'title' => '4K Webcam',
                'price' => 129.99,
                'description' => 'High-resolution 4K webcam for professional video calls.',
                'image' => 'https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-z-flip6.jpg',
                'code' => 666666,
            ],
            [
                'title' => 'Portable Speaker',
                'price' => 49.99,
                'description' => 'Compact portable speaker with powerful sound and Bluetooth.',
                'image' => 'https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-z-fold-special-edition.jpg',
                'code' => 777777,
            ],
            [
                'title' => 'Wireless Charger',
                'price' => 29.99,
                'description' => 'Fast wireless charger compatible with all Qi-enabled devices.',
                'image' => 'https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-z-flip6.jpg',
                'code' => 888888,
            ],
            [
                'title' => 'Fitness Tracker',
                'price' => 79.99,
                'description' => 'Advanced fitness tracker with heart rate and sleep monitoring.',
                'image' => 'https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-z-fold-special-edition.jpg',
                'code' => 999999,
            ],
            [
                'title' => 'Laptop Cooling Pad',
                'price' => 19.99,
                'description' => 'Cooling pad with silent fans to prevent laptop overheating.',
                'image' => 'https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-z-flip6.jpg',
                'code' => 111222,
            ],
        ];

        // Insert data into the database
        DB::table('products')->insert($products);
    }
}
