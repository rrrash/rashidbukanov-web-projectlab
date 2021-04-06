<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Profile extends Controller
{
    function store(Request $req){
    // echo "Hello";
    $path=$req->file('img')->store('avatars');
    return['path'=>$path,'upload'=>'success'];
}
}
