<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyinfoController extends Controller
{
    
    public function viewPage () {
        return view('myinfo');
    }
    public function parameterReturn ($key) {
        $myinfo = ["name"=>"mohamed a. bahnsawy","email"=>"vipme1@outlook.com","age"=>27,"faculty"=>"tourism and hotels","university"=>"minia university"];
        if (array_key_exists($key, $myinfo)){
            return "My ".ucwords($key) . " is : " . ucwords($myinfo[$key]);
        }elseif ($key == "request"){
            return $myinfo;
        }
        else{
            return "Not Found, Please try again";
        }
    
    }
    public function returnPara () {
        $name = request('name');
        $myName = "mohamed";
        if ($name == $myName){
            return "My Name is : ".ucwords($name). " <br><br> This is a Parameter Value Returned from Route /req";
        }else{
            return "Not Found.";
        } 
    }
    public function __invoke()
    {
        return "Demo Text";
    }
}
