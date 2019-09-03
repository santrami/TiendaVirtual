<?php 

use illuminate\database\Seeder;
use illuminate\database\Eloquent\Model;
use App\Product;

class ProductTableSeeder extends Seeder{

    public function run(){
        $data = array(
            [
                'name'=> 'playera 1',
                'slug'=> 'playera-1',
                'description'=> 'Playera de spiderman',
                'extract'=> 'descripcion extracto',
                'price'=> 80,
                'image'=> 'https://img00.deviantart.net/ffea/i/2015/116/0/4/batman_t_shirt_by_vinivix-d4fgf06.jpg',                
                'visible'=>1,
                'created_at'=>new DateTime,
                'updated_at'=>new DateTime,
                'category_id'=>1,
            ],
            [
                'name'=> 'playera 2',
                'slug'=> 'playera-2',
                'description'=> 'Playera de python',
                'extract'=> 'descripcion extracto',
                'price'=> 100,
                'image'=> 'https://cdn.shopify.com/s/files/1/1668/0637/products/s_5901_CDBMaVDr4JeFV3b3UHhtnM3n7xjx5tBlack_1024x1024.png?v=1500609441',
                'visible'=>1,                
                'created_at'=>new DateTime,
                'updated_at'=>new DateTime,
                'category_id'=>2,
            ],
            [
                'name'=> 'playera 3',
                'slug'=> 'playera-3',
                'description'=> 'Playera de batman',
                'extract'=> 'descripcion extracto',
                'price'=> 80,
                'image'=> 'https://cdn.diverbebe.com/18812-large_default/camiseta-spiderman-logo.jpg',
                'visible'=>1,                
                'created_at'=>new DateTime,
                'updated_at'=>new DateTime,
                'category_id'=>1,
            ],
        );
        Product::insert($data);
    }
}