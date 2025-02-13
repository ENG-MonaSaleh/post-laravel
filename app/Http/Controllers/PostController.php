<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        return view("posts.index")->with("posts" , $posts );
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("posts.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $post = new post ;
        if ($request->hasFile('image')) {
            $image = $request['image'];
            $imageName = time() . "." . $image->getClientOriginalExtension();
            $image->move(public_path('images') , $imageName  );
        }
        $post->create([
            "title" => $request['title'],
            "description" =>$request['description'],
            "image" => $imageName
        ]);     
        return Redirect()->route('get.index')->with("success" , "added successfully") ;
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view("posts.show")->with("post" , $post);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view("posts.update")->with("post" , $post);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $imageName = $post->image ;
        if ($request->hasFile('image')) {
            $image = $request['image'];
            $imageName = time() . "." . $image->getClientOriginalExtension();
            $image->move(public_path('images') , $imageName  );
        }
        $post->update([
            "title" => $request['title'],
            "description" =>$request['description'],
            "image" => $imageName
        ]);
        return Redirect()->route('get.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return Redirect()->route('get.index');
    }
}
