<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function myblogs()
    {
        $blogs = [
            "b1" => ["title" => "Sample Title 1", "body" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
            industry's standard dummy text ever since the 1500s", "auther"=> "admin"],
            "b2" => ["title" => "Sample Title 2", "body" => "when an unknown printer took a galley of type
            and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
            leap into electronic typesetting", "auther"=> "mohamed"],
            "b3" => ["title" => "Sample Title 3", "body" => "remaining essentially unchanged. It was popularised in the 1960s
            with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
            publishing software like Aldus PageMaker including versions of Lorem Ipsum", "auther"=> "ahmed"]
        ];
        return view('blog', ["data" => $blogs]);
    }
    public function singleBlog ($single){
        $blogs = [
            "b1" => ["title" => "Sample Title 1", "body" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
            industry's standard dummy text ever since the 1500s", "auther"=> "admin"],
            "b2" => ["title" => "Sample Title 2", "body" => "when an unknown printer took a galley of type
            and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
            leap into electronic typesetting", "auther"=> "mohamed"],
            "b3" => ["title" => "Sample Title 3", "body" => "remaining essentially unchanged. It was popularised in the 1960s
            with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
            publishing software like Aldus PageMaker including versions of Lorem Ipsum", "auther"=> "ahmed"]
        ];
        if(array_key_exists($single,$blogs)){
            return view('single', ['data'=> $blogs[$single]]);
        }

    }
}
