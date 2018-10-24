<?php

namespace app\index\controller;

use think\Controller;

class Blog extends Controller
{
    //
    public function index()
    {
        return '执行列表操作';
    }

    public function create()
    {
        return '执行新增操作';
    }

    public function save() 
    {
        return '执行保存操作';
    }

    public function read($id = 0)
    {
        return '执行查看操作 [id:'. $id .']';
    }

    public function edit($id = 0)
    {
        return '执行编辑操作 [id:'. $id .']';
    }

    public function update($id = 0)
    {
        return '执行更新操作 [id:'. $id .']';
    }

    public function delete($id)
    {
        return '执行删除操作 [id:'. $id .']';
    }
}
