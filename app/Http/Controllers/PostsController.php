<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

    // functions needed or resource functions
    // index-listing all the post 
    // create-for creating form 
    // store-for submitting
    // edit-used to edit form 
    // and this edit submits to a function called
    // update
    // destroy-deleting 
    // show-showing one item 

    // when using this below controller making command all resource functions are generated automatically
    // php artisan make:controller PostsController --resource

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $posts = Post::all();
        // $posts = Post::orderBy('title','desc')->get();
        // return Post::where('title','Post Two')->get();

        // use DB; --in top
        // $posts = DB::select('SELECT *FROM posts');
        $posts = Post::orderBy('title','desc')->paginate(1);
        // paginate(1) means one post per page 
        return view('posts.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
