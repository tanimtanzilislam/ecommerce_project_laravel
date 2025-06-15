<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use 

class AdminController extends Controller
{
    public function view_category()
        {
            return view('admin.category');
        }


        public function add_category(Request $request){

        }
}
