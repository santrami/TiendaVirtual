<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            [
            'name'=> 'Super heroes',
            'slug'=> 'Super-heroes',
            'description'=> 'Esta es una descripcion de categoría',
            'color'=> '#440022'
            ],
            [
            'name'=> 'geek',
            'slug'=> 'geek',
            'description'=> 'Esta es una descripcion de categoría',
            'color'=> '#445500'
            ]
            );
            Category::insert($data);
    }
}
