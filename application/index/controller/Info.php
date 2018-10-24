<?php

namespace app\index\controller;

use think\Controller;

/**
 * @alias('rq')
 */
class Info extends Controller
{
    /**
     * 获取当前请求变量
     * @access public
     */
    public function param()
    {
        echo '获取全部变量';
        dump($this->request->param());
        echo '获取id和name变量';
        dump($this->request->only(['id'=>0,'name'=>'a']));

        return '';
    }

    /** 
     * 获取当前访问域名
     * @access public
    */
    public function domain()
    {
        return $this->request->domain();
    }

    /**
     * 
     * @access public
     */
    public function method()
    {
        return $this->request->method();
    }

    /**
     * 
     * @access public
     */
    public function url()
    {
        return $this->request->url();
    }

    /**
     * 
     * @access public
     */
    public function pathinfo()
    {
        return $this->request->pathinfo();
    }

    /**
     * @access public
     */
    public function module()
    {
        return $this->request->module();
    }

    /**
     * @access public
     */
    public function ext()
    {
        return $this->request->ext();
    }

    /**
     * @access public
     */
    public function controller()
    {
        return $this->request->controller();
    }
    
    /**
     * @access public
     */
    public function action()
    {
        return $this->request->action();
    }
    
}
