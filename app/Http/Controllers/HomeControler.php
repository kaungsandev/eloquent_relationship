<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Comment;
use App\Post;

class HomeControler extends Controller
{
    //
    public function user(){
        $user = User::where('id',1)->first();
        $post = $user->post;
        
         return view('welcome', compact('user','post'));
    }
}
