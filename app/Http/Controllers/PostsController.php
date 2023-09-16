<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    //
    public function index() {
        return Post::search('Ipsa')->get();
    }

    public function show(User $user, Post $post) {
        return $post;
    }

    public function store() {
        return view('posts/create');
    }
}
