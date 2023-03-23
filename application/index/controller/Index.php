<?php
namespace app\index\controller;

use think\Controller;
use app\index\model\user;

class Index extends controller
{
    public function index(user $obj)
    {
        $result = $obj->userInfo();
        var_dump($result);

    }
    public function maopao(){
        $arr = [5,6,1,7,2,4,3];

        for($i=0;$i<(count($arr));$i++){
            for($j=$i+1;$j<(count($arr));$j++){
                if($arr[$i]<=$arr[$j]){
                    $tem = $arr[$i];
                    $arr[$i] = $arr[$j];
                    $arr[$j] = $tem;
                }
                dump($arr);
            }

        }

    }
}
