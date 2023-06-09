<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Post as ModelsPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Post extends Controller
{
    function postList()
    {
        $posts = ModelsPost::all();
        return view('main.post.list', ['posts' => $posts]);
    }
    function createPost()
    {
        return view('main.post.add');
    }
    function addPost(Request $request)
    {

        $post = new ModelsPost;
        $post->title = $request->title;
        $post->prama_link = urlencode($request->prama_link);
        $post->status = 1;
        if ($post->save()) {
            return redirect('post-list')->with('message', 'Post Created SuccessFulli');
        } else {
            return redirect()->back();
        }
    }

    function editPost($id)
    {
        $data = DB::table('posts')->where('id', $id)->first();
        return view('main.home', ['post' => $data]);
    }
}
