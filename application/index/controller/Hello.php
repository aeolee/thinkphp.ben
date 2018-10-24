<?php

namespace app\index\controller;

use think\Controller;

class Hello extends Controller
{
    public function index($name='ThinkPHP'){
        return 'Hello,' .$name .'! This is Controller.';
    }
}
