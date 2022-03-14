<?php

namespace App\Controllers;

use App\Models\UsernameModel;

class Buscar extends BaseController{

    public function index(){
        if(!session()->is_logged){
            return redirect()->to(base_url('/'));
        }else{
            return view('buscar');
        }

    }
}