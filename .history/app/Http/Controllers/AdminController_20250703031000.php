<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Brian2694\Toastr\Facades\Toastr;

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

        Toastr::success('Category added successfully', 'Success', [
            "closeButton" => true,
            "timeOut" => "10000"
        ]);

        return redirect()->back();
    }

    public function delete_category($id)
    {
        $data = Category::find($id);

        if (!$data) {
            Toastr::error('Category not found', 'Error', [
                "closeButton" => true,
                "timeOut" => "10000"
            ]);
            return redirect()->back();
        }

        $data->delete();

        Toastr::success('Category deleted successfully', 'Success', [
            "closeButton" => true,
            "timeOut" => "10000"
        ]);

        return redirect()->back();
    }
}
