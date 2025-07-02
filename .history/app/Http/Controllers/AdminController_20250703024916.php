<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Toastr; // Make sure this is imported

class AdminController extends Controller
{
    public function view_category()
    {
        $data = Category::all();
        return view('admin.category', compact('data'));
    }

    public function add_category(Request $request)
    {
        $category = new Category;
        $category->category_name = $request->category;
        $category->save();

        Toastr::success('Category Added Successfully', 'Success', [
            "closeButton" => true,
            "timeOut" => "10000"
        ]);

        return redirect()->back();
    }

    public function delete_category($id)
    {
        $data = Category::find($id);
        $data->delete();

        Toastr::success('Category Deleted Successfully', 'Success', [
            "closeButton" => true,
            "timeOut" => "10000"
        ]);

        return redirect()->back();
    }
}
