<?php

namespace app\index\controller;

use think\Controller;
use think\Request;

class Redirect extends Controller
{
    /**
     * 页面重定向
     * 
     * @route('redirect')
     */
    public function index()
    {
        return redirect('hello',['name'=>'think']);
    }

    public function hello($name)
    {
        return 'hello,' . $name . '!';
    }
}
