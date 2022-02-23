<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        if(DB::table('users')->count() == 0){

            DB::table('users')->insert([
                
                        ['id' => 1,
                        'name' => 'Johan',
                        'email' => 'johan@gmail.com',
                        'contact' => 8955200003,
                        'address' => '17, mohanlal gandhi park',
                        'password' => bcrypt('test@123'),
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s')],
                    
                    
                    [
                        'id' => 2,
                        'name' => 'Herry',
                        'email' => 'herry@gmail.com',
                        'contact' => 8800880033,
                        'address' => 'Adarsh Nagar',
                        'password' => bcrypt('1234'),
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s')],

                    [
                        'id' => 3,
                        'name' => 'Alish',
                        'email' => 'Alish@gmail.com',
                        'contact' => 8700110099,
                        'address' => 'Shahibagh',
                        'password' => bcrypt('1122'),
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s')
                    ],

                    [
                        'id' => 4,
                        'name' => 'BoB',
                        'email' => 'bob@gmail.com',
                        'contact' => 8899008877,
                        'address' => 'Nava Vadaj',
                        'password' => bcrypt('2211'),
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s')
                    ],
                
                    [
                        'id' => 5,
                        'name' => 'Jerry',
                        'email' => 'jerry@gmail.com',
                        'contact' => 8811001100,
                        'address' => 'Narangpura',
                        'password' => bcrypt('1111'),
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s')
                    ],

                    [
                        'id' => 6,
                        'name' => 'Jorge',
                        'email' => 'Jorge@gmail.com',
                        'contact' => 9900110022,
                        'address' => 'Prahlad Nagar',
                        'password' => bcrypt('1212'),
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s')
                    ],

                    [
                        'id' => 7,
                        'name' => 'Rahul',
                        'email' => 'rahul@gmail.com',
                        'contact' => 9001001122,
                        'address' => 'Chand Kheda',
                        'password' => bcrypt('2121'),
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s')
                    ],

                    [
                        'id' => 8,
                        'name' => 'Ruhi',
                        'email' => 'ruhi@gmail.com',
                        'contact' => 9900881177,
                        'address' => 'Gandhi Nagar',
                        'password' => bcrypt('1111'),
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s')
                    ],

                    [
                        'id' => 9,
                        'name' => 'Megh',
                        'email' => 'megh@gmail.com',
                        'contact' => 7677889900,
                        'address' => 'S.G. Highway',
                        'password' => bcrypt('1010'),
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s')
                    ],

                    [
                        'id' => 10,
                        'name' => 'Raj',
                        'email' => 'raj@gmail.com',
                        'contact' => 8700870099,
                        'address' => 'Shashtri Nagar',
                        'password' => bcrypt('0011'),
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s')
                    ],
                ]);
            
        } else { echo "\e[31mTable is not empty, therefore NOT "; }

    }
}