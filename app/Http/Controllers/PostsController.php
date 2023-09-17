<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use App\Enums\PostState;

class PostsController extends Controller
{
    //
    public function index() {
        return Post::search('Ipsa')->get();
    }

    public function show(User $user, Post $post) {
        return view('posts/show');
    }

    public function store() {
        return view('posts/create');
    }

    public function state(PostState $state) {
        return $state->value;
    }
}
