<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        /*
        * CREAR UN POST
        return Post::create( 
            ['title' => "test",
            'slug' => "test",
            'content' => "test",
            'category_id' => 1,
            'description' => "test",
            'posted' => "not",
            'image' => "test"]
        );
        */

        /*
        * OBTENER UN POST MEDIANTE SU ID
        return POST::find(1);
        */

        /*
        * ACTUALIZAR POST MEDIANTE ID
        */
        /*
        $post = POST::find(4); 
        return $post->update(
            [
            'title' => "test 4",
            'slug' => "test", 
            'content' => "test", 
            'category_id' => 1, 
            'description' => "test", 
            'posted' => "not", 
            'image' => "test"
            ]
        ); 
        */

        /*
        * ELIMINAR POST MEDIANTE ID
         * $post = POST::find(1); 
         * return $post->delete();
         */

        /* OBTENER LA CATEGORIA DEL POST*/
        /*dd(Post::find(1)->category);*/

        /* OBTENER LOS POSTS QUE TIENEN ESTA CATEGORIA */
        /*dd(Category::find(1)->posts);*/
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
