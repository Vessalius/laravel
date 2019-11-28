<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
class IndexController extends Controller{
    public function index(){
       // DB::setFetchMode(PDO::FETCH_ASSOC);
        $user=DB::table('user')->get();
        /*foreach ($user as $val) { //打印name列
            echo $val->name;
        }*/
       // $user = DB::select('select * from user', [1]);
        print_r(json_decode(json_encode($user),true));
    }

    public function edit(){
        DB::table('user')->where('id', 1)->update(['name' => '555555']);
        return 'success';
    }

    public function add(){
        DB::table('user')->insert(
            ['name' => '测试123']
        );
        DB::table('user')->insertOrIgnore([
            ['id' => '', 'name' => '21313'],
            ['id' => '', 'name' => '56646']
        ]);
        return 'success';
    }

}
