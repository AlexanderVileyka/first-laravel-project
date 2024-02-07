<?php

namespace App\Http\Controllers;

use App\Http\Requests\Comment\CommentStoreRequest;
use App\Models\Comment;

class CommentController extends Controller
{
    /**
     * Store a newly created resource in storage
     */
    public function store(CommentStoreRequest $request)
    {
        //
    }

    /**
     * Remove the specified resource frome storage.
     */
    public function destroy(Comment $comment)
    {
        //
    }
}
