<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index($name){
        return view('Welcome');
    }

    public function userInfo($userId, $name){
        return "User: " . $userId . ' - ' .$name;
    }

    public function displayPosts(){
        $posts = Post::all();

        foreach ($posts as $post){
            print $post->title . '<br>';
        }


    }
}
