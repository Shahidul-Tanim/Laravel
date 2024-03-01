<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    function addPosts(){
       return view('addPost') ;
    }

    function allPosts(){

        $posts = Post::latest()->paginate(5);

        return view('allPosts', compact('posts')) ;
    }

    function storePost(Request $request){

        // *VALIDATION
        $request->validate([
            'title' => 'required|min:15',
            'detail' => 'required|max:150'
        ]);

        //  *STORE DATA
        $post = new Post();
        $post->title = $request->title;
        $post->detail = $request->detail;
        $post->author = $request->author;
        $post->save();

        return back()->with('success', 'The Post Has Submitted Successfully');
      
    }

    function deletePost($id){
        $post = Post::findOrFail($id);
        $post->delete();
        return back();
    }

    function EditData($id){
        $post = Post::find($id);
        // dd($post);
        return view('editPost', compact('post'));
    }
}
