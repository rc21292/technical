<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Category::insert([
            'name' => 'Technology'
        ]);
        App\Category::insert([
            'name' => 'Weather'
        ]);
        App\Category::insert([
            'name' => 'News'
        ]);
        App\Category::insert([
            'name' => 'Science'
        ]);
    }
}
