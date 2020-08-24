<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\CssSelector\Node\FunctionNode;

class DetailController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.detail');
    }
}
