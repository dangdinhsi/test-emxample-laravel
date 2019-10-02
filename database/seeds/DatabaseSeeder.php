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
       DB::table('sanpham')->insert([
           array('thubmnail'=>'http://file.vforum.vn/hinh/2017/12/bai-van-ta-con-cho-lop-2.jpg','title'=>'Title1','price'=>'1000','discount'=>0.2),
           array('thubmnail'=>'http://file.vforum.vn/hinh/2017/12/bai-van-ta-con-cho-lop-2.jpg','title'=>'Title1','price'=>'1000','discount'=>0.2),
           array('thubmnail'=>'http://file.vforum.vn/hinh/2017/12/bai-van-ta-con-cho-lop-2.jpg','title'=>'Title1','price'=>'1000','discount'=>0.2),
           array('thubmnail'=>'http://file.vforum.vn/hinh/2017/12/bai-van-ta-con-cho-lop-2.jpg','title'=>'Title1','price'=>'1000','discount'=>0.2),
           array('thubmnail'=>'http://file.vforum.vn/hinh/2017/12/bai-van-ta-con-cho-lop-2.jpg','title'=>'Title1','price'=>'1000','discount'=>0.2),
           array('thubmnail'=>'http://file.vforum.vn/hinh/2017/12/bai-van-ta-con-cho-lop-2.jpg','title'=>'Title1','price'=>'1000','discount'=>0.2),
           array('thubmnail'=>'http://file.vforum.vn/hinh/2017/12/bai-van-ta-con-cho-lop-2.jpg','title'=>'Title1','price'=>'1000','discount'=>0.2),
           array('thubmnail'=>'http://file.vforum.vn/hinh/2017/12/bai-van-ta-con-cho-lop-2.jpg','title'=>'Title1','price'=>'1000','discount'=>0.2),
           array('thubmnail'=>'http://file.vforum.vn/hinh/2017/12/bai-van-ta-con-cho-lop-2.jpg','title'=>'Title1','price'=>'1000','discount'=>0.2),
           array('thubmnail'=>'http://file.vforum.vn/hinh/2017/12/bai-van-ta-con-cho-lop-2.jpg','title'=>'Title1','price'=>'1000','discount'=>0.2),
           array('thubmnail'=>'http://file.vforum.vn/hinh/2017/12/bai-van-ta-con-cho-lop-2.jpg','title'=>'Title1','price'=>'1000','discount'=>0.2),
           array('thubmnail'=>'http://file.vforum.vn/hinh/2017/12/bai-van-ta-con-cho-lop-2.jpg','title'=>'Title1','price'=>'1000','discount'=>0.2),
           array('thubmnail'=>'http://file.vforum.vn/hinh/2017/12/bai-van-ta-con-cho-lop-2.jpg','title'=>'Title1','price'=>'1000','discount'=>0.2),
           array('thubmnail'=>'http://file.vforum.vn/hinh/2017/12/bai-van-ta-con-cho-lop-2.jpg','title'=>'Title1','price'=>'1000','discount'=>0.2),
           array('thubmnail'=>'http://file.vforum.vn/hinh/2017/12/bai-van-ta-con-cho-lop-2.jpg','title'=>'Title1','price'=>'1000','discount'=>0.2),
           array('thubmnail'=>'http://file.vforum.vn/hinh/2017/12/bai-van-ta-con-cho-lop-2.jpg','title'=>'Title1','price'=>'1000','discount'=>0.2),
       ]);
    }
}
