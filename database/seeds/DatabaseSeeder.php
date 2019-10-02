<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $data =[];
        for($i=1;$i<=30;$i++){
            $data[]=[
              'thubmnail'=>'https://thoitrang.biz/wp-content/uploads/2017/05/ao-co-tron6.jpg',
              'title'=>'San pham '.$i,
                'price'=>1000,
                'discount'=>0.2
            ];
        }
       DB::table('sanpham')->insert($data);
    }
}
