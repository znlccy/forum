<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/7
 * Time: 15:09
 * Comment: 前端基础控制器
 */
namespace app\index\controller;

use think\Controller;
use think\Request;

class BaseController extends Controller {

    public function __construct(Request $request = null)
    {
        parent::__construct($request);
    }

}