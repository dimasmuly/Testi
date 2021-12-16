<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'id' => 1,
                'category_name_en' => 'kursi',
                'category_name_hin' => 'kursi',
                'category_slug_en' => 'kursi',
                'category_slug_hin' => 'kursi',
                'category_icon' => 'kursi',
            ],
            [
                'id' => 2,
                'category_name_en' => 'meja',
                'category_name_hin' => 'meja',
                'category_slug_en' => 'meja',
                'category_slug_hin' => 'meja',
                'category_icon' => 'meja',
            ]
        ];

        Category::insert($categories);

    }
}
