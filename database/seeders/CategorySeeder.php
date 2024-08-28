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

        Category::create([
            'name'          => Str::upper('Menu Paketan'),
            'slug'          => Str::slug('menu_paketan'),
            'thumbnail'     => 'menu_paketan.webp',
        ]);

        Category::create([
            'name'          => Str::upper('Morning Charge'),
            'slug'          => Str::slug('morning_charge'),
            'thumbnail'     => 'morning_charge.webp',
        ]);
    }
}
