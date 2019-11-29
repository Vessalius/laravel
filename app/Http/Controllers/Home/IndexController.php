<?php

namespace App\Http\Controllers\Home;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
class IndexController extends Controller{
    public function index(){
        $user=DB::table('user')->get();
        /*foreach ($user as $val) { //打印name列
            echo $val->name;
        }*/
       // $user = DB::select('select * from user', [1]);
     //   print_r(json_decode(json_encode($user),true));
      //  return view('welcome', $user);
    }

}
