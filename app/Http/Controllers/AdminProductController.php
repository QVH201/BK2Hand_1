<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


class AdminProductController extends Controller
{
    //
    public function index()
    {
        

            return view('admin', [
              
            ]);
 
 
    }
}