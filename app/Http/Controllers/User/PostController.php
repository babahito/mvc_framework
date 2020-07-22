<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Post;

class PostController extends Controller
{
    public function list()
    {
        $posts = Post::all();
        return view('user/posts/list',[ 'posts' => $posts ]);
    } 
    // フォーム画面に飛ぶ

    public function create()
    {
        return view('user/posts/create');
    } 

    // フォーム投稿
    public function store(Request $request){

        $post=new Post;
        $post->title=$request->title;
        $post->content=$request->content;
        $post->save();
        return view('user/posts/create');  
    } 
}
