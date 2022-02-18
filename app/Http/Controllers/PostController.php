<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use GuzzleHttp\Middleware;
use Illuminate\Auth\Middleware\Authorize;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct() {
        $this->Middleware(['auth'])->only('store','distroy');
    }
    public function show(Post $user)
    {
        $postes = $user->latest()->with('like','user')->paginate(3);
        return view('post.post',[
            'user'=>$user,
            'posts' => $postes
        ]);
    }
    public function store(User $user,Request $request)
    {
        $request->user()->post()->create([
            'body' =>$request->body
        ]);
        return redirect()->route('posts.show');
    }
    public function distroy(Post $post)
    {
        $this->authorize('delete', $post);
        $post->delete();
       
        return redirect()->route('posts.show');
    }
}
