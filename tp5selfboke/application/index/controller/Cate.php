<?php
namespace app\index\controller;
use think\Controller;

class cate extends controller
{
    public function index()
    {
        return $this->fetch('cate');
    }




}
