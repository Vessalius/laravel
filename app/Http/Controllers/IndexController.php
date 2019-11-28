<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
class IndexController extends Controller{
    public function index(){
        $user=DB::name('user')->get();
       // $user = DB::select('select * from user', [1]);
        print_r($user);
    }
}
