<?php

namespace App\Controllers;

use App\Models\UsernameModel;

class Login extends BaseController{

    public function index(){

        $model = model(UsernameModel::class);

        $username = trim($this->request->getvar('username'));
        $password = trim($this->request->getvar('password'));


        if(!$user = $model->buscarUsuario('username',$username)){
            $data = ['title'=>'Usuario incorrecto', 'password'=>$password];
            return view ('errorlogin/index',$data);
        }else{

            if(!password_verify($password, $user->password)){
                $data = ['title'=>'Contraseña incorrecta','password'=>$password];
                return view('errorlogin/index',$data);
            }else{
                session()->set([
                    'id'=>$user->id,
                    'username'=>$user->username,
                    'rol'=>$user->rol,
                    'is_logged'=>true
                ]);
                return view('home');
            }     
        }
    }

    public function singout(){
        session()->destroy();
        return redirect()->to(base_url('/'));
    }
}
