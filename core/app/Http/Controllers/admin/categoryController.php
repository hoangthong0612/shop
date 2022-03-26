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

    public function changeStatus($id)
    {
        $category = Category::findOrFail($id);
        $category->status = !$category->status;
        $category->save();
        $notify[] = ['success', 'Category Status Change Succeessfully'];
        return back()->withNotify($notify);
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required'
        ]);

        $category=new Category();
        $category->name=$request->name;
        $category->save();
        $notify=['success','Category create successfully'];
        return back()->withNotify($notify);
    }



    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $category=Category::findOrFail($id);
        $category->name=$request->name;
        $category->save();
        $notify=['success','Category update successfully'];
        return back()->withNotify($notify);
    }
}
