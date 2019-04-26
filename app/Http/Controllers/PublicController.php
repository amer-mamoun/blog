<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index(){

        $posts = Post::all();
        return view('welcome', compact('posts'));
    }

    public function contact(){

        return view('contact');
    }

    public function contactPost(Request $request){

        if($request->hasFile('attachment')){
            $file = $request->file('attachment');

            echo "File Name" . $file->getClientOriginalName();
            echo "<br>";

            $file->move('images', $file->getClientOriginalName());
        }

        $name = $request['email'];
        var_dump($name);
    }

}
