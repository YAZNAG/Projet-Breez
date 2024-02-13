<?php
/// app/Http/Controllers/CategoryController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        // Retrieve all categories from the database
        $categories = Category::all();

        // Divide categories into groups of 5
        $chunks = $categories->chunk(5);

        // Pass category groups to the view 'categories.index'
        return view('categories.index', compact('chunks'));
    }
           public function create()
     {
    return view('categories.create');
}

public function store(Request $request)
{
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'icon' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        'description' => 'nullable|string',
    ]);

    $iconPath = $request->file('icon')->store('images', 'public');

    $category = new Category();
    $category->name = $validatedData['name'];
    $category->icon = $iconPath;
    $category->description = $validatedData['description'];
    $category->save();

    return redirect()->route('categories.index')->with('success', 'Category created successfully');
}


    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('categories.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'icon' => 'nullable|string|max:255',
            'num_products' => 'required|integer|min:0',
        ]);

        $category = Category::findOrFail($id);
        $category->update($validatedData);

        return redirect()->route('categories.index')->with('success', 'Category updated successfully');
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect()->route('categories.index')->with('success', 'Category deleted successfully');
    }
}
