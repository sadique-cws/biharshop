<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['cat_title' => 'Electronics', 'cat_description' => 'Electronics products'],
            ['cat_title' => 'Clothing', 'cat_description' => 'Clothing products'],
            ['cat_title' => 'Books', 'cat_description' => 'Books products'],
            ['cat_title' => 'Home & Garden', 'cat_description' => 'Home & Garden products'],
            ['cat_title' => 'Sports & Outdoors', 'cat_description' => 'Sports & Outdoors products'],
            ['cat_title' => 'Toys & Games', 'cat_description' => 'Toys & Games products'],
            ['cat_title' => 'Beauty & Health', 'cat_description' => 'Beauty & Health products'],
            ['cat_title' => 'Movies & TV','cat_description' => 'Movies & TV products'],
            ['cat_title' => 'Automotive', 'cat_description' => 'Automotive products'],
            ['cat_title' => 'Pets', 'cat_description' => 'Pets products'],
            ['cat_title' => 'Travel', 'cat_description' => 'Travel products'],
            ['cat_title' => 'Other', 'cat_description' => 'Other products'],
        ];

        foreach ($categories as $category) {
            $category['cat_slug'] = Str::slug($category['cat_title']);
            Category::create($category);
        }
    }
}
