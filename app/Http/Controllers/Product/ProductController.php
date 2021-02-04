<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //商品分类管理
    public function proSort(){
        return view('product/proSort');
    }

    //商品管理
    public function proManage(){
        
        return view('product/proManage');
    }
}
