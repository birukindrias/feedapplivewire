<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class siteController extends Controller
{
  public function dashboard()
  {

    return view('dashboard');

  }
  public function userPost(User $user,Post $post)
  {
    $posts = $user->post()->latest()->with('user','like')->paginate(5);
    // ->paginate(3);
    return view('user.posts',[
      'posts'=>$posts,
      'user'=>$user
    ]);

  }
}
