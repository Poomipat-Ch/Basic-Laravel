<?php

namespace App\Http\Controllers;

use App\Models\Blog as ModelsBlog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Blog extends Controller
{
    function index()
    {
        return view('blog.index');
    }

    public function create(ModelsBlog $blog)
    {
        ModelsBlog::create([
            'title' => $blog->title,
            'description' => $blog->description,
            'user_id' => $blog->user_id,
            'body' => $blog->body
        ]);

        return redirect()->route('blog');
    }
}
