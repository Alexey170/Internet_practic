<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogSingle extends Controller
{
    public function __invoke()
    {
        return view('main.single');
    }
}
