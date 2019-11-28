<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class IndexController extends Controller{
    public function index(){
        $user=Db::name('user')->get();
        print_r($user);
    }
}
