<?php

namespace App\Http\Controllers;

use App\category;
use App\post;
use Illuminate\Http\Request;

class postController extends Controller
{
    public function index(){
        $data = category::with('posts')->get();
        return $data;
    }
}
