<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class LikeController extends Controller
{

   
    public function destroy(Post $post)
    {
        $post->like()->delete();
       return back();
    }
    public function store(Request $request,Post $post)
    {
        // dd($post);
       $post->like()->create([
           'user_id'=>$request->user()->id
       ]);
    return redirect()->route('posts.show');
       
    }
}
