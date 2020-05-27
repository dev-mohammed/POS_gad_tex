<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryTypeController extends Controller
{
    public function index()
    {
        return view('admin.category_types.index');
    }

    public function create()
    {
        return view('admin.category_types.create');
    }
}
