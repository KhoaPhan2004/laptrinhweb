<?php

namespace App\Http\Controllers;


use App\Models\Posts;

/**
 * CRUD User controller
 */
class PostsController extends Controller
{
    /**
     * List of users
     */
    public function list()
    {

        $baiviet = Posts::all();
        return view('baiviet.danhsach', ['baiviet' => $baiviet]);
    }

}