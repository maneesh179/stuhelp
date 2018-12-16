<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users ; 
class User extends Controller
{
   public function createuser(){
   	return view('register');
   }
   public function saveusers(Request $request){
   	//dd($request);
    $data['firstname']=$request->firstname;
    $data['lastname']=$request->lastname;
    $data['gender']=$request->gender;
    $data['email']=$request->email;
    $data['password']=$request->password;
    $data['address']=$request->address;

    $newuser= new Users();

    $newuser->addnewUser($data); 
     
   }
}
