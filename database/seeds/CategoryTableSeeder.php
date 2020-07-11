<?php

use Illuminate\Database\Seeder;
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
          Category::create([
          'name'=>'class',
          'slug'=>'classique'
        ]);
         Category::create([
          'name'=>'sport',
          'slug'=>'sprtife'
        ]);
          Category::create([
          'name'=>'sweetsh',
          'slug'=>'sweet-shirt'
        ]);
          Category::create([
          'name'=>'sweetpa',
          'slug'=>'sweet-pants'
        ]);
           Category::create([
          'name'=>'robes',
          'slug'=>'robe'
        ]);
           Category::create([
          'name'=>'accessoires',
          'slug'=>'accessoire'
        ]);
    
    }
}
