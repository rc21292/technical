<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::where('status', 1)->paginate(5);
        return view('index', compact('posts'));
    }
    public function create()
    {
        $categories = Category::where('status', 1)->get();
        return view('posts.create-post', compact('categories'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'img' => 'required|image'
        ]);
        if($image = $request->file('img')){
            $path = 'images';
            $postImage = date('YmdHis'). '.' .$image->getClientOriginalExtension();
            $image->move($path, $postImage);
        }
        $post = new Post();
        $post->title = $request->title;
        $post->description = $request->description;
        $post->img = $postImage;
        $post->category_id = $request->category_id;
        $post->save();
        return back()->with('status', 'Post successfully created');
    }
}
