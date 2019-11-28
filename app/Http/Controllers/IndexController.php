<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
class IndexController extends Controller{
    public function index(){
       // DB::setFetchMode(PDO::FETCH_ASSOC);
        $user=DB::table('user')->get();
       // $user = DB::select('select * from user', [1]);
        print_r(json_decode(json_encode($user),true));
    }
}
