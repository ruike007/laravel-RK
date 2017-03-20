<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;

class UserController extends Controller
{
    //
    public function register()
    {
        return view('users.register');
    }

    public function  store(Requests\UserRegisterRequest $request)
    {
        //保存用户数据
        User::create(array_merge($request->all(),['avatar'=>'/images/default-avatar.png']));
        //发送验证邮件
        //返回主页
        return redirect('/');
    }
}
