<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return view('pages/articlespage', [
            'posts' => Post::where('is_featured', true)->latest()->take(5)->get()
        ]);
    }
}
