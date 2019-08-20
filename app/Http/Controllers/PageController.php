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

    public function getBlogSingle(){
        return view('page.blogSingle');
    }

    public function getRegular(){
        return view('page.regular');
    }

    public function getContact(){
        return view('page.contact');
    }

    public function getCart(){
        return view('page.cart');
    }
}
