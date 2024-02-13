<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', ['products' => $products]);
    }

    public function create()
    {
        $categories = Category::all();
        return view('products.create', ['categories' => $categories]);
    }

    public function store(Request $request)
    {
        // Validation des données du formulaire
        $request->validate([
            'product_name' => 'required|string',
            'category' => 'required|exists:categories,id',
            'purchase_price' => 'required|numeric',
            'price' => 'required|numeric',
            'description' => 'required|string',
            'quantity' => 'required|integer',
            'product_images' => 'required|array',
            'product_images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Valide chaque image individuellement
        ]);

        // Enregistrement du produit
        $product = new Product();
        $product->ProductName = $request->product_name;
        $product->Category = $request->category;
        $product->Prix_d_achat = $request->purchase_price;
        $product->Price = $request->price;
        $product->Description = $request->description;
        $product->quantity = $request->quantity;

        // Gestion des images
        $images = [];
        foreach ($request->file('product_images') as $image) {
            $imageName = $image->getClientOriginalName();
            $image->storeAs('images', $imageName); // Stockage de l'image
            $images[] = $imageName;
        }
        $product->images = $images;

        $product->save();

        return redirect()->route('products.index')->with('success', 'Product added successfully');
    }
    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('products.edit', ['product' => $product, 'categories' => $categories]);
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'image_data' => 'required',
            'product_name' => 'required',
            'category' => 'required',
            'status' => 'required',
            'price' => 'required',
            'description' => 'required',
            'prix_achat' => 'required',
            'quantity' => 'required',
        ]);

        $product->update($request->all());

        return redirect()->route('products.index')->with('success', 'Product updated successfully');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Product deleted successfully');
    }
}
