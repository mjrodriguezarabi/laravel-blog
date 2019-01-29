<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    //
    public function index(){

    	$posts = Post::orderBy('published_at', 'desc')->paginate(5);

    	return view('welcome', compact('posts'));
    }
}