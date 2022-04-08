<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogDetailController extends Controller
{
   public function index()
   {
        return view('pages.Site.blog_detail');
   }
}
