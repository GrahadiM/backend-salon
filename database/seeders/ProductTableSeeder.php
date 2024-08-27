<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Menu Paket
        Product::create([
            'category_id'   => 11,
            'name'          => Str::upper('Paket 1'),
            'thumbnail'     => 'menu-paket.png',
            'price'         => 1500000,
            'body'          => Str::upper('Perawatan Pengantin'),
            'favorite'      => 'false',
        ]);

        Product::create([
            'category_id'   => 11,
            'name'          => Str::upper('Paket 2'),
            'thumbnail'     => 'menu-paket.png',
            'price'         => 75000,
            'body'          => Str::upper('Creambath + Cuci + Hair Tonic + Dry'),
            'favorite'      => 'false',
        ]);

        Product::create([
            'category_id'   => 11,
            'name'          => Str::upper('Paket 3'),
            'thumbnail'     => 'menu-paket.png',
            'price'         => 130000,
            'body'          => Str::upper('Hair Spa (Loreal) + Cuci + Hair Tonic + Dry'),
            'favorite'      => 'false',
        ]);

        Product::create([
            'category_id'   => 11,
            'name'          => Str::upper('Paket 4'),
            'thumbnail'     => 'menu-paket.png',
            'price'         => 130000,
            'body'          => Str::upper('Hair Spa (Matrix) + Cuci + Hair Tonic + Dry'),
            'favorite'      => 'false',
        ]);

        Product::create([
            'category_id'   => 11,
            'name'          => Str::upper('Paket 5'),
            'thumbnail'     => 'menu-paket.png',
            'price'         => 120000,
            'body'          => Str::upper('Hair Spa (Makarizo) + Cuci + Hair Tonic + Dry'),
            'favorite'      => 'false',
        ]);

        Product::create([
            'category_id'   => 11,
            'name'          => Str::upper('Paket 6'),
            'thumbnail'     => 'menu-paket.png',
            'price'         => 130000,
            'body'          => Str::upper('Creambath (Textur) + Cuci + Hair Tonic + Dry'),
            'favorite'      => 'false',
        ]);

        Product::create([
            'category_id'   => 11,
            'name'          => Str::upper('Paket 7'),
            'thumbnail'     => 'menu-paket.png',
            'price'         => 150000,
            'body'          => Str::upper('Lulur + Massage + Steam + Creambath + Hair Tonic + Dry'),
            'favorite'      => 'false',
        ]);

        Product::create([
            'category_id'   => 11,
            'name'          => Str::upper('Paket 8'),
            'thumbnail'     => 'menu-paket.png',
            'price'         => 150000,
            'body'          => Str::upper('Lulur + Massage + Steam + Ratus'),
            'favorite'      => 'false',
        ]);

        Product::create([
            'category_id'   => 11,
            'name'          => Str::upper('Paket 9'),
            'thumbnail'     => 'menu-paket.png',
            'price'         => 185000,
            'body'          => Str::upper('Lulur + Massage + Steam + Mandi Susu/Rempah'),
            'favorite'      => 'false',
        ]);

        Product::create([
            'category_id'   => 11,
            'name'          => Str::upper('Paket 10'),
            'thumbnail'     => 'menu-paket.png',
            'price'         => 250000,
            'body'          => Str::upper('Lulur + Massage + Steam + Creambath + Facial + Dry'),
            'favorite'      => 'false',
        ]);

        Product::create([
            'category_id'   => 11,
            'name'          => Str::upper('Paket 11'),
            'thumbnail'     => 'menu-paket.png',
            'price'         => 150000,
            'body'          => Str::upper('Creambath + Facial + Hair Tonic + Dry'),
            'favorite'      => 'false',
        ]);

        Product::create([
            'category_id'   => 11,
            'name'          => Str::upper('Paket 12'),
            'thumbnail'     => 'menu-paket.png',
            'price'         => 100000,
            'body'          => Str::upper('Pedicure + Manicure'),
            'favorite'      => 'false',
        ]);

        Product::create([
            'category_id'   => 11,
            'name'          => Str::upper('Paket 13'),
            'thumbnail'     => 'menu-paket.png',
            'price'         => 110000,
            'body'          => Str::upper('Bleaching Kaki dan Tangan'),
            'favorite'      => 'false',
        ]);

        Product::create([
            'category_id'   => 11,
            'name'          => Str::upper('Paket 14'),
            'thumbnail'     => 'menu-paket.png',
            'price'         => 50000,
            'body'          => Str::upper('Totok Wajah + Masker Muka'),
            'favorite'      => 'false',
        ]);

        Product::create([
            'category_id'   => 11,
            'name'          => Str::upper('Paket 15'),
            'thumbnail'     => 'menu-paket.png',
            'price'         => 110000,
            'body'          => Str::upper('Totok Wajah + Creambath + Dry'),
            'favorite'      => 'false',
        ]);

        // Morning Charge
        Product::create([
            'category_id'   => 12,
            'name'          => Str::upper('Jam 00:02 s/d 00:03'),
            'thumbnail'     => 'morning-charge.png',
            'price'         => 675000,
            'body'          => Str::upper('Jam 00:02 s/d 00:03'),
            'favorite'      => 'false',
        ]);

        Product::create([
            'category_id'   => 12,
            'name'          => Str::upper('Jam 00:03 s/d 00:04'),
            'thumbnail'     => 'morning-charge.png',
            'price'         => 500000,
            'body'          => Str::upper('Jam 00:03 s/d 00:04'),
            'favorite'      => 'false',
        ]);

        Product::create([
            'category_id'   => 12,
            'name'          => Str::upper('Jam 00:04 s/d 00:05'),
            'thumbnail'     => 'morning-charge.png',
            'price'         => 425000,
            'body'          => Str::upper('Jam 00:04 s/d 00:05'),
            'favorite'      => 'false',
        ]);

        Product::create([
            'category_id'   => 12,
            'name'          => Str::upper('Jam 00:05 s/d 00:06'),
            'thumbnail'     => 'morning-charge.png',
            'price'         => 375000,
            'body'          => Str::upper('Jam 00:05 s/d 00:06'),
            'favorite'      => 'false',
        ]);

        Product::create([
            'category_id'   => 12,
            'name'          => Str::upper('Jam 00:06 s/d 00:07'),
            'thumbnail'     => 'morning-charge.png',
            'price'         => 350000,
            'body'          => Str::upper('Jam 00:06 s/d 00:07'),
            'favorite'      => 'false',
        ]);

        Product::create([
            'category_id'   => 12,
            'name'          => Str::upper('Jam 00:07 s/d 00:08'),
            'thumbnail'     => 'morning-charge.png',
            'price'         => 325000,
            'body'          => Str::upper('Jam 00:07 s/d 00:08'),
            'favorite'      => 'false',
        ]);

        Product::create([
            'category_id'   => 12,
            'name'          => Str::upper('Jam 00:08 s/d 00:09'),
            'thumbnail'     => 'morning-charge.png',
            'price'         => 275000,
            'body'          => Str::upper('Jam 00:08 s/d 00:09'),
            'favorite'      => 'false',
        ]);
    }
}
