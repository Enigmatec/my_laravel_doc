<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewComposerController extends Controller
{
    public function postIndex(){
        return view('pages.post.index');
    }

    public function commentIndex(){
        return view('pages.comment.index');
    }
}
