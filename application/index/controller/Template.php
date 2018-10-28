<?php

namespace app\index\controller;

use think\Controller;

/**
 * 
 */
class Template extends Controller
{
    /**
     * 
     */
    public function index()
    {
        $this->assign('names',['ThinkPHP','KanCloud']);
        $this->assign('title','Welcome');
        $this->assign(['users'=>[
                            ['name'=>'老李','age'=>41],
                            ['name'=>'会胖','age'=>39],
                            ['name'=>'师兄','age'=>40]
                        ]
                    ]);
        $this->assign('list','人员列表');
        return $this->fetch('hello');
    }
}
