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
        for($i=1;$i<=70;$i++){
            $data[]=[
              'thubmnail'=>'https://thoitrang.biz/wp-content/uploads/2017/05/ao-co-tron6.jpg',
              'title'=>'San pham '.$i,
                'price'=>1000*rand(1,10),
                'discount'=>0.2*rand(1,4)
            ];
        }
       DB::table('sanpham')->insert($data);
    }
}
