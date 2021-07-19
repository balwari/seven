<?php

use Illuminate\Database\Seeder;
use App\Category;

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
                'name' => 'Security'
            ],
            [
                'name' => 'Health & Safety'
            ],
            [
                'name' => 'Loss Prevention',
            ]
        ];

        foreach ($categories as $category) {
            Category::create([
                'name' => $category['name']
            ]);
        }
    }
}
