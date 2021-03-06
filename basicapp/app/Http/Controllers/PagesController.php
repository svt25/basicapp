<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function show($id)
    {
        return view('page', [
            'page' => Page::findOrFail($id)
        ]);
    }

    public function index()
    {
        return view('pages', [
            'pages' => Page::all()
        ]);
    }
}
