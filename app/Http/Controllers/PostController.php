<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts=Post::get();
        return view('Posts.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData= $request->validate([
            'title'=>'required|max:255',
            'content'=>'required',
        ]);
         $post=new Post;
         $post->title=$validatedData['title'];
         $post->content=$validatedData['content'];
         $post->user_id=rand(1,10);
         $post->save();
         
         return redirect("/posts");
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post )
    {
        return view('Posts.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('Posts.edit',[
            'post' =>Post::where('id',$id)->first()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {   
        $validatedData=$request->validate([
            'title'=>'required|max:255',
            'content'=>'required'
        ]);
        Post::where('id',$id)->update([
            'title'=>$validatedData['title'],
            'content'=>$validatedData['content']
        ]);
        return redirect('/posts');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Post::destroy($id);
        return redirect('/posts');
    }
}
