<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoriesController extends Controller
{
    public function index()
    {
        $allCategories = \App\Models\CategoriesBooks::latest()->get();
        return view("pages.categories.index", compact($allCategories));
    }
    public function create()
    {
        return view("pages.categories.create");
    }
    public function store(Request $request)
    {

    }
    public function show(Request $request, string $id)
    {
    }
    public function update(Request $request, string $id)
    {
    }
    public function destroy($id)
    {
    }
}
