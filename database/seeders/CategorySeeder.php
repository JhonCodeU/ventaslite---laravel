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
            'image' => 'https://dummyimage.com/200x150/5c5756/fff.png'
        ]);

        Category::create([
            'name' => 'Cellphones',
            'image' => 'https://dummyimage.com/200x150/5c5756/fff.png'
        ]);

        Category::create([
            'name' => 'Computers',
            'image' => 'https://dummyimage.com/200x150/5c5756/fff.png'
        ]);
    }
}
