<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Common\AdminController;
use Illuminate\Http\Request;

use App\Http\Requests;

class IndexController extends AdminController
{
    public function index(){
		return view('admin.index');
	}

	public function info(){
		return view('admin.info');
	}
}
