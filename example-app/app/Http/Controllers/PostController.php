<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    function addPosts(){
       return view('addPost') ;
    }

    function allPosts(){
        return view('allPosts') ;
    }

    function storePost(Request $request){

        // *VALIDATION
        $request->validate([
            'title' => 'required|min:10',
            'detail' => 'required|max:15'
        ]);
      
    }
}
