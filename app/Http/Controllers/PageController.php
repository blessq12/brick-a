<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;

class PageController extends Controller
{

    public function __construct(){
        // nothing
    }
    public function index(){
        return view('index',[
            'title' => 'Производство и продажа лего-кирпича',
            'description' => ''
        ]);
    }
    public function slug(){
        return view('slug',[
            'title' => 'Услуги',
            'description' => ''
        ]);
    }
    public function shop(){
        return view('shop',[
            'title' => 'Каталог',
            'description' => ''
        ]);
    }
    public function delivery(){
        return view('delivery',[
            'title' => 'Доставка',
            'description' => ''
        ]);
    }
    public function panel(){
        return view('3d-panel',[
            'title' => '3D-панели',
            'description' => ''
        ]);
    }
}
