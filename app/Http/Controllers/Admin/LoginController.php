<?php
/*
 * @Author: your name
 * @Date: 2021-01-31 01:02:26
 * @LastEditTime: 2021-02-04 03:48:50
 * @LastEditors: sueRimn
 * @Description: In User Settings Edit
 * @FilePath: \shopping\app\Http\Controllers\Admin\LoginController.php
 */

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    //后台登录页
    public function login(){
        return view('admin/login');
    }

    public function doLogin(Request $request){

       
        $username = $request->input('username');
        $password = $request->input('password');

        // $validatedData = $request->validate([
        //     'title' => 'required|unique:posts|max:255',
        //     'body' => 'required',
        // ]);

        $messages = [
            'required' => ' :attribute and :other 不能为空.',
            'captcha' => '验证码不正确.'
        ];

        $validator = Validator::make($request->all(), [
            'captcha' => 'required|captcha'
        ],$messages);

        if ($validator->fails()) {
            return redirect('admin/login')
                        ->withErrors($validator)
                        ->withInput();
        }

        //$user = DB::select('select * from user where user_name = ? and pwd = ?', [$username, md5($password)]);

        $user = DB::table('user')->where('user_name','=',$username)->where('pwd','=',md5($password))->get();

        if (count($user)>0){
            session()->put('username',$username);
            return redirect('admin/index');
        }else{
            // return redirect('login')->with('errors','用户名或密码不正确');
            return redirect('login')->withErrors('用户名或密码不正确');
        }

    }
    
    public function index(){
        if(!session()->has('username'))
        {
            return redirect('admin/login');
        }else{
            return view('admin/index');
        }
    }

    //登出
    public function logOut(){
        //清除session
        session()->flush();
        return redirect('admin/login');
    }
}
