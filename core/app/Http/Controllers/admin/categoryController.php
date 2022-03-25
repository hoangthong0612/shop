<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\Category;
class categoryController extends Controller
{
    //

    public function index()
    {
        $pageTitle = 'Category List';
        $emptyMessage = 'No category available.';
        $categories=Category::latest()->paginate(10);
        return view('admin.category.index',compact('pageTitle','emptyMessage','categories'));

    }
}
