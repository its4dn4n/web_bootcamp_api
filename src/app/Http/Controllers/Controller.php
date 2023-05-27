<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    
    /**
    * create new user
    */
    public function create(Request $request){
              User::create([
              "name" => $request->name,
               "email"=>$request->email,
               "password"=>$request->password
              ]);
              return "user created";
    }

    /**
    * show a user
    */
    public function show($id){
              $user= User::where("id",$id)->first();
              return $user->name ;
    }
     
    /**
    * show all users 
    */
    public function index(){
              $users = User::all();
              return $users;
    }

}
