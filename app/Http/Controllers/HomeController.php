<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Candidate;
use App\Models\FoodItems;
use App\Models\Category;
use App\Models\AdmissionInfo;
use App\Models\ExistingStudent;
use App\Service\MenuService;
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
        return view('menu');

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
