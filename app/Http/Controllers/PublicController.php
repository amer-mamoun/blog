<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index(){
        return view('Welcome');
    }

    public function userInfo($userId, $name){
        return "User: " . $userId . ' - ' .$name;
    }
}
