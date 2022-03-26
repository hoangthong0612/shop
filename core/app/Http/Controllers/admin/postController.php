<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\post;

class postController extends Controller
{
    //

    public function index()
    {

        $pageTitle = 'Posts List';
        $emptyMessage = 'No post available.';
        $posts = post::with('category')->latest()->paginate(10);
        return view('admin.post.index', compact('pageTitle', 'emptyMessage', 'posts'));
    }
}
