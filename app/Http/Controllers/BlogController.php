<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image as Image;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{


    public function index(){
        return view('blog.index');
    }


}
