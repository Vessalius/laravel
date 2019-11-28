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

    public function update(){

    }

    public function add(){
        DB::table('user')->insert(
            ['name' => '测试123']
        );
        return 'success';
    }

}
