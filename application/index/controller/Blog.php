<?php

namespace app\index\controller;

use app\common\model\Blog as BlogModel;
use think\Controller;
use think\Request;

/**
 * 
 * @route('blog')
 */
class Blog extends Controller
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        //
    }

    /**
     * 
     * 
     * @riyte('blog/search')
     */
    public function search()
    {
        $users = BlogModel::where('age','>=',30)
            ->field('id,name,age')
            ->order('id','desc')
            ->select();
        
        $this->assign('users',$users);

        return $this->fetch();
    }

    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */
    public function create()
    {
        //
    }

    /**
     * 保存新建的资源
     *
     * @param  \think\Request  $request
     * @return \think\Response
     */
    public function save(Request $request)
    {
        //
    }

    /**
     * 显示指定的资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function read($id)
    {
        $blog = BlogModel::get($id);

        if ($blog) {
            $recommend           = [0 => '普通', 1 => '置顶', 2 => '推荐', 3 => '精华'];
            $blog->recommend     = $recommend[$blog->recommend];
            $blog->publish_time = date('Y-m-d', $blog->publish_time);
        }

        $this->assign('blog', $blog);

        return $this->fetch();
    }

    /**
     * 显示编辑资源表单页.
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * 保存更新的资源
     *
     * @param  \think\Request  $request
     * @param  int  $id
     * @return \think\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * 删除指定资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function delete($id)
    {
        //
    }
}
