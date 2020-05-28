<?php

namespace App\Http\Controllers\Admin;

use App\Models\CategoryType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $categoryTypes = CategoryType::all()->count();
        return view('admin.home.index' , compact('categoryTypes'));
    }
}
