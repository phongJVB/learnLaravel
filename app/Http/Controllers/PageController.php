<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex(){
    	return view('page.home');
    }

    public function getProduct(){
    	return view('page.product');
    }

    public function getShop(){
    	return view('page.shop');
    }

    public function getBlog(){
    	return view('page.blog');
    }
}
