<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name'          => Str::upper('Hair Cut'),
            'slug'          => Str::slug('hair_cut'),
            'thumbnail'     => 'hair.webp',
        ]);

        Category::create([
            'name'          => Str::upper('Hair Washing'),
            'slug'          => Str::slug('hair_washing'),
            'thumbnail'     => 'hair.webp',
        ]);

        Category::create([
            'name'          => Str::upper('Hair Treatment'),
            'slug'          => Str::slug('hair_treatment'),
            'thumbnail'     => 'hair.webp',
        ]);

        Category::create([
            'name'          => Str::upper('Hair Curly'),
            'slug'          => Str::slug('hair_curly'),
            'thumbnail'     => 'hair.webp',
        ]);

        Category::create([
            'name'          => Str::upper('Hair Extension'),
            'slug'          => Str::slug('hair_extension'),
            'thumbnail'     => 'hair.webp',
        ]);

        Category::create([
            'name'          => Str::upper('Treatment'),
            'slug'          => Str::slug('treatment'),
            'thumbnail'     => 'treatment.webp',
        ]);

        Category::create([
            'name'          => Str::upper('Body & Face'),
            'slug'          => Str::slug('body_and_face'),
            'thumbnail'     => 'body_and_face.webp',
        ]);

        Category::create([
            'name'          => Str::upper('Make Up'),
            'slug'          => Str::slug('make_up'),
            'thumbnail'     => 'make_up.webp',
        ]);

        Category::create([
            'name'          => Str::upper('Eyelash & Lash Lift'),
            'slug'          => Str::slug('eyelash_and_lash_lift'),
            'thumbnail'     => 'treatment.webp',
        ]);

        Category::create([
            'name'          => Str::upper('Nail Art & Manicure/Pedicure'),
            'slug'          => Str::slug('nail_art_and_manicure_or_pedicure'),
            'thumbnail'     => 'nail_art.webp',
        ]);


        // // 1
        // Category::create([
        //     'name'          => Str::upper('Education'),
        //     'slug'          => Str::slug('Education'),
        //     'thumbnail'     => 'education.png',
        // ]);

        // // 2
        // Category::create([
        //     'name'          => Str::upper('Entertainment'),
        //     'slug'          => Str::slug('Entertainment'),
        //     'thumbnail'     => 'entertainment.png',
        // ]);

        // // 3
        // Category::create([
        //     'name'          => Str::upper('Computer Science'),
        //     'slug'          => Str::slug('Computer Science'),
        //     'thumbnail'     => 'computer.png',
        // ]);

        // // 4
        // Category::create([
        //     'name'          => Str::upper('Matematika'),
        //     'slug'          => Str::slug('Matematika'),
        //     'thumbnail'     => 'math.png',
        //     'type'          => 'sub',
        //     'parent_id'     => 1,
        // ]);

        // // 5
        // Category::create([
        //     'name'          => Str::upper('Bahasa'),
        //     'slug'          => Str::slug('Bahasa'),
        //     'thumbnail'     => 'education.png',
        //     'type'          => 'sub',
        //     'parent_id'     => 1,
        // ]);

        // // 6
        // Category::create([
        //     'name'          => Str::upper('IPA'),
        //     'slug'          => Str::slug('IPA'),
        //     'thumbnail'     => 'education.png',
        //     'type'          => 'sub',
        //     'parent_id'     => 1,
        // ]);

        // // 7
        // Category::create([
        //     'name'          => Str::upper('IPS'),
        //     'slug'          => Str::slug('IPS'),
        //     'thumbnail'     => 'education.png',
        //     'type'          => 'sub',
        //     'parent_id'     => 1,
        // ]);

        // // 8
        // Category::create([
        //     'name'          => Str::upper('Musik'),
        //     'slug'          => Str::slug('Musik'),
        //     'thumbnail'     => 'album.png',
        //     'type'          => 'sub',
        //     'parent_id'     => 2,
        // ]);

        // // 9
        // Category::create([
        //     'name'          => Str::upper('Komik'),
        //     'slug'          => Str::slug('Komik'),
        //     'thumbnail'     => 'komik.png',
        //     'type'          => 'sub',
        //     'parent_id'     => 2,
        // ]);

        // // 10
        // Category::create([
        //     'name'          => Str::upper('Majalah'),
        //     'slug'          => Str::slug('Majalah'),
        //     'thumbnail'     => 'entertainment.png',
        //     'type'          => 'sub',
        //     'parent_id'     => 2,
        // ]);

        // // 11
        // Category::create([
        //     'name'          => Str::upper('Design'),
        //     'slug'          => Str::slug('Design'),
        //     'thumbnail'     => 'design.png',
        //     'type'          => 'sub',
        //     'parent_id'     => 3,
        // ]);

        // // 12
        // Category::create([
        //     'name'          => Str::upper('Program'),
        //     'slug'          => Str::slug('Program'),
        //     'thumbnail'     => 'program.png',
        //     'type'          => 'sub',
        //     'parent_id'     => 3,
        // ]);

        // // 13
        // Category::create([
        //     'name'          => Str::upper('Service'),
        //     'slug'          => Str::slug('Service'),
        //     'thumbnail'     => 'computer.png',
        //     'type'          => 'sub',
        //     'parent_id'     => 3,
        // ]);
    }
}
