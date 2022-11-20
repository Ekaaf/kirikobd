<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\FoodItem;
use App\Models\Category;
use DB;
use App\SSP;

class HomeController extends Controller
{
    
    
    public function index(Request $request)
    {   
        return view('index');

    }

    public function menu(Request $request)
    {   
        $categories = Category::all();
        $foods = FoodItem::all();
        return view('menu')->with('categories', $categories)->with('foods', $foods);

    }

    public function story(Request $request)
    {   
        return view('story');

    }

    public function contact(Request $request)
    {   
        return view('contact');

    }

    public function gallery(Request $request)
    {   
        return view('gallery');

    }

}
