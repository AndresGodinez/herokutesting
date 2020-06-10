<?php

namespace App\Observers;

use App\Comment;
use App\Mail\NewComment;
use Illuminate\Support\Facades\Mail;

class CommentObserver
{
    /**
     * Handle the comment "created" event.
     *
     * @param  \App\Comment  $comment
     * @return void
     */
    public function created(Comment $comment)
    {
        Mail::to('ing.a.godinez@gmail.com')->queue( new NewComment($comment));
    }
}
