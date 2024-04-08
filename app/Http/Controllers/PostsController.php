<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function allPostPage() {
        return 'you get all posts';
    }

    public function singlePost($postId) {
        return "your single post: $postId";
    }
}
