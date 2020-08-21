<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * ブログ一覧を表示
     * @return view
     */
    public function showList() {
        return view('blog.list');
    }
}
