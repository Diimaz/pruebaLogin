<?php

namespace App\Controllers;

use App\Models\UsernameModel;

class Home extends BaseController{

    public function index(){
        if(!session()->is_logged){
            return view('login/index');
        }else{
            return view('home');
        }

    }
}
