<?php

namespace Database\Seeders;

use App\Models\Category;
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
            'name' => 'Course',
            'image' => 'https://picsum.photos/id/237/200/200'
        ]);

        Category::create([
            'name' => 'Tennis',
            'image' => 'https://picsum.photos/id/203/200/200'
        ]);

        Category::create([
            'name' => 'Cellphones',
            'image' => 'https://picsum.photos/id/400/200/200'
        ]);

        Category::create([
            'name' => 'Computers',
            'image' => 'https://picsum.photos/id/107/200/200'
        ]);
    }
}
