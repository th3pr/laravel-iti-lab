<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//  Home Page
Route::get('/', function () {
    return view('welcome');
});

// Return myinfo page
Route::get('/myinfo', function () {
    return view('myinfo');
});

// Return capitalized parameters
Route::get('/myinfo/{key}', function ($key) {
    $myinfo = ["name"=>"mohamed a. bahnsawy","email"=>"vipme1@outlook.com","age"=>27,"faculty"=>"tourism and hotels","university"=>"minia university"];
    if (array_key_exists($key, $myinfo)){
        return "My ".ucwords($key) . " is : " . ucwords($myinfo[$key]);
    }elseif ($key == "request"){
        return $myinfo;
    }
    else{
        return "Not Found, Please try again";
    }

});

// Return Parameters
Route::get('req', function () {
    $name = request('name');
    $myName = "mohamed";
    if ($name == $myName){
        return "My Name is : ".ucwords($name). " <br><br> This is a Parameter Value Returned from Route /req";
    }else{
        return "Not Found.";
    } 
});