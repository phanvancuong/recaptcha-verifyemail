<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(thanhvienSeeder::class);
    }
}


class cuongSeeder extends Seeder
{
    
    public function run()
    {
       DB::table('hahaha')->insert([
       		array('sodienthoai'=>'5000'),
            array('sodienthoai'=>'50000'),
            array('sodienthoai'=>'500000'),
       ]);
    }
}
class heheheSeeder extends Seeder
{
    
    public function run()
    {
       DB::table('hehehes')->insert([
            ['name'=>'ao','heheheid'=>'10'],
            ['name'=>'quan','heheheid'=>'10'],
            ['name'=>'giay','heheheid'=>'10'],
       ]);
    }
}
class thanhvienSeeder extends Seeder
{
    
    public function run()
    {
       DB::table('thanhviens')->insert([
            ['user'=>'teo','pass'=>Hash::make(12345),'level'=>1],
            ['user'=>'tun','pass'=>Hash::make(12345),'level'=>2],
            ['user'=>'cuong','pass'=>bcrypt(12345),'level'=>2],
       ]);
    }
}
