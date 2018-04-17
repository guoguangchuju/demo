<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $model = M('test');
        $data = $model ->select();
        $this ->assign('data',$data);
        $this -> display();
         }
     public function add(){
         $model = M('test');
         $post = I('post.');
        if (!empty($post)){
            dump($post);
        }else{
            $this -> display();
        }




         }
}