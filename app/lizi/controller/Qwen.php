<?php
declare (strict_types = 1);

namespace app\lizi\controller;

use app\BaseController;
use app\lizi\model\Test as TestModel;
use think\facade\Request;

class Qwen extends BaseController
{
    
    public function push_test(){
        $params = Request::param();
        if(!$params){
            $params = ['msg'=>'没有数据发送'];
        }
        $params = json_encode($params);
        $data = ['params'=>$params];
        (new TestModel())->insert($data);
    }
}
