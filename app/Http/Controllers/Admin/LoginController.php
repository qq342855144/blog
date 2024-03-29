<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Common\AdminController;
use App\Http\Model\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Crypt;
use Symfony\Component\Console\Input\Input;

class LoginController extends AdminController
{
	public function login(Request $request){
		if($request->isMethod('post')){
			$user=User::where([
				'user_name'=>$request->input('username')
			])->first();
			//对比密码
			if($user && Crypt::decrypt($user->toArray()['user_pass'])==$request->input('password')){
				//存入session
				session(['user'=>$user]);
				return redirect('admin/index');
			}
			return back()->with('msg','用户名或者密码错误!');
		}
		return view('admin.login');
    }

	public function logout(){
		session(['user'=>null]);
		return redirect('admin/login');
	}
}
