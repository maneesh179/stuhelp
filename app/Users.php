<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Users extends Model
{
    public function addnewUser(array $optionsss=[]){
       // dd($optionsss);
        DB::select('CALL usp_enterUser(?,?,?,?,?,?)',array($optionsss['firstname'],$optionsss['lastname'],$optionsss['gender'],$optionsss['email'],$optionsss['password'],$optionsss['address']));
    }
}
