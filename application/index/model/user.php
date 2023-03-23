<?php
namespace  app\index\model;
use think\Model;

class user extends Model{

    public function userInfo(){

        $result =User::all();
        return $result;
    }




}