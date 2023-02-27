<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function __construct(){
        $this->title = 'Заголовок страницы';
        $this->description = 'Описание для станицы';
    }
    public function index(){
        return view('index',[
            'title' => $this->title,
            'description' => $this->description
        ]);
    }
    public function slug(){
        return view('slug',[
            'title' => $this->title,
            'description' => $this->description
        ]);
    }
    public function shop(){
        return view('shop',[
            'title' => $this->title,
            'description' => $this->description
        ]);
    }
}
