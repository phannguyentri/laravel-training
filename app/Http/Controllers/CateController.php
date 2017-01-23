<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CateController extends Controller
{
    public function getAdd(){
    	return view('admin.cate.add');
    }
    public function postAdd(){
    	
    }
}
