<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;

class RecipeController extends Controller
{
    public function home()
    {
        $featuredRecipes = Recipe::latest()->take(3)->get();
        return view('home', compact('featuredRecipes'));
    }

    public function index(Request $request)
    {
        $search = $request->input('search');

        $recipes = Recipe::when($search, function ($query, $search) {
            return $query->where('name', 'like', "%{$search}%")
                         ->orWhere('category', 'like', "%{$search}%")
                         ->orWhere('ingredients', 'like', "%{$search}%");
        })->paginate(3)->appends(['search' => $search]);

        return view('recipes.index', compact('recipes', 'search'));
    }

    public function show($id)
    {
        $recipe = Recipe::findOrFail($id);

        $previous = Recipe::where('id', '<', $id)->orderBy('id', 'desc')->first();
        $next = Recipe::where('id', '>', $id)->orderBy('id', 'asc')->first();

        return view('recipes.show', compact('recipe', 'previous', 'next'));
    }

    public function profile()
    {
        return view('profile');
    }
}