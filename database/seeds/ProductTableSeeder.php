<?php 

use illuminate\database\Seeder;
use illuminate\database\Eloquent\Model;
use App\Product;

class ProductTableSeeder extends Seeder{

    public function run(){
        $data = array(
            [
                'name'=> 'Camiseta 1',
                'slug'=> 'Camiseta-1',
                'description'=> 'Camiseta de batman',
                'extract'=> 'Camisa Bátman Clásico',
                'price'=> 80,
                'image'=> 'https://http2.mlstatic.com/playeras-para-parejas-batman-batichica-camisas-novios-D_NQ_NP_641993-MLM31223554338_062019-Q.jpg',                
                'visible'=>1,
                'created_at'=>new DateTime,
                'updated_at'=>new DateTime,
                'category_id'=>1,
            ],
            [
                'name'=> 'Camiseta 2',
                'slug'=> 'Camiseta-2',
                'description'=> 'Camiseta de python',
                'extract'=> 'Camiseta Python',
                'price'=> 100,
                'image'=> 'https://cdn.shopify.com/s/files/1/1668/0637/products/s_5901_CDBMaVDr4JeFV3b3UHhtnM3n7xjx5tBlack_1024x1024.png?v=1500609441',
                'visible'=>1,                
                'created_at'=>new DateTime,
                'updated_at'=>new DateTime,
                'category_id'=>2,
            ],
            [
                'name'=> 'Camiseta 3',
                'slug'=> 'Camiseta-3',
                'description'=> 'Camiseta de spiderman',
                'extract'=> 'Camiseta Spiderman',
                'price'=> 80,
                'image'=> 'https://cdn.diverbebe.com/18812-large_default/camiseta-spiderman-logo.jpg',
                'visible'=>1,                
                'created_at'=>new DateTime,
                'updated_at'=>new DateTime,
                'category_id'=>1,
            ],
            [
                'name'=> 'Camiseta 4',
                'slug'=> 'Camiseta-4',
                'description'=> 'Camiseta de java',
                'extract'=> 'Camiseta Java',
                'price'=> 120,
                'image'=> 'https://i0.wp.com/ae01.alicdn.com/kf/HTB1UKzuKXGWBuNjy0Fbq6z4sXXaR/El-lenguaje-de-programaci%C3%B3n-Java-c%C3%B3digo-PHP-imagen-T-camisas-Europa-Frecuentes-Popular-Top-cuello-redondo.jpg',
                'visible'=>1,                
                'created_at'=>new DateTime,
                'updated_at'=>new DateTime,
                'category_id'=>2,
            ],
        );
        Product::insert($data);
    }
}