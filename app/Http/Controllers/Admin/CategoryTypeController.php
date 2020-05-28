<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CategoryTypeRequest;
use App\Models\CategoryType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryTypeController extends Controller
{
    public function index()
    {
        $categoryTypes = CategoryType::paginate(20);
        return view('admin.category_types.index', compact('categoryTypes'));
    }

    public function create()
    {
        return view('admin.category_types.create');
    }

    public function store(CategoryTypeRequest $request)
    {
        CategoryType::create($request->validated());
        return redirect()->back()->with('message', 'تم اضافة النوع بنجاح');
    }

    public function edit(CategoryType $type)
    {
        return view('admin.category_types.edit', compact('type'));
    }

    public function update(CategoryTypeRequest $request, $id)
    {
        CategoryType::where('id', '=', $id)->update($request->validated());
        return redirect()->back()->with('message', 'تم تعديل النوع بنجاح');
    }
}
