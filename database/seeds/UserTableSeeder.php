<?php

use illuminate\database\Seeder;
use illuminate\database\Eloquent\Model;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=array(
            [
                'name'=>'Santiago',
                'last_name'=>'Ramirez',
                'email'=>'santrami@hotmail.com',
                'user'=>'santrami',
                'password'=>\Hash::make('123'),
                'type'=>'admin',
                'active'=>1,
                'address'=>'cra 5454',
                
            ],
            [
                'name'=>'Juan',
                'last_name'=>'Ramirez',
                'email'=>'santrami1@hotmail.com',
                'user'=>'juanra',
                'password'=>\Hash::make('123'),
                'type'=>'user',
                'active'=>1,
                'address'=>'cra 5454',
                
            ]

        );
        User::insert($data);
    }
}
