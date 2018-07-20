<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CommentFormRequest;
use App\Comment;

class CommentsController extends Controller
{
    public function newComment(CommentFormRequest $request) {
        $comment = new Comment(array(
            'post_id' => $request->get('post_id'),
            'content' => $requent->get('content')
        ));

        $comment->save();

        /* redirect users back to the previous page! */
        return redirect()->back()->with('status', 'Your comment has been created!');
    }
}
