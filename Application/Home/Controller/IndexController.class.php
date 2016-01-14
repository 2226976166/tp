<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index($name = 'ws'){
    	$this->show('加载成功！！');
    	$this->assign('name',$name);
    	$this->display();
    }
}