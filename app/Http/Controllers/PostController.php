<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Post;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class PostController extends Controller
{
    /**
     * Display the specified resource.
     */
    public function show(Post $post, Request $request)
    {
        if (!$post->is_featured) {
            throw new NotFoundHttpException();
        }

        return view('post.view', compact('post'));
    }
}
