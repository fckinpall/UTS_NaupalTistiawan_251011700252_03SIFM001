<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipeController;

Route::get('/', [RecipeController::class, 'home'])->name('home');

Route::get('/recipes', [RecipeController::class, 'index'])->name('recipes.index');

Route::get('/recipe/{id}', [RecipeController::class, 'show'])->name('recipe.show');

Route::get('/profile', [RecipeController::class, 'profile'])->name('profile');