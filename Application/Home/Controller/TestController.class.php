<?php
namespace Home\Controller;
use Org\Net\IpLocation;
use Think\Controller;
use Think\Model;
class TestController extends Controller{
    public function test_save(){
        $this->display();
    }
    //弹窗写法
    public function test1(){
        $this->display();
    }
    //邮件
    public function test2(){
        $this->display();
    }
    //正则
    public function test3(){
        $str ="<img data-s=\"300,640\" data-type=\"jpeg\" data-src=\"http://mmbiz.qpic.cn/mmbiz/DhicicpokfbUefHj9UocbXTV1Tptjsbx69dw76UrTGBuMHsMFAiaPoVWhdrAQmmxRTXuFE3rrjax0UhS8U42TktmA/0?wx_fmt=jpeg\" data-ratio=\"0.6633858267716536\" data-w=\"\" class=\"\" src=\"http://mmbiz.qpic.cn/mmbiz/DhicicpokfbUefHj9UocbXTV1Tptjsbx69dw76UrTGBuMHsMFAiaPoVWhdrAQmmxRTXuFE3rrjax0UhS8U42TktmA/640?wx_fmt=jpeg&amp;tp=webp&amp;wxfrom=5&amp;wx_lazy=1\" style=\"width: auto !important; height: auto !important; visibility: visible !important;\" data-fail=\"0\">";
        //$preg= "/(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})*\/[A-Za-z0-9]+\/[A-Za-z0-9]+\/[0-9]*\?[A-Za-z0-9]+\_[A-Za-z0-9]+\=[A-Za-z0-9]+/";
        $preg_1 = "/http:\/\/\w+\.\w+\.\w+\/([A-Za-z0-9]+)\/([A-Za-z0-9]+)\/([0-9])\?(\w){3,}/";
        preg_match($preg_1,$str,$arr);
        //dump($arr);
        $this -> assign('arr',$arr);
        $this->display();
    }
    public function test4(){
        $ip = '117.25.13.123';
        $datatype = 'txt';
        $url = 'http://api.ip138.com/query/?ip='.$ip.'&datatype='.$datatype;
        $header = array('token:00d5cb1fac5dc5cbfe2ff218292a2dfd33');
        echo getDatas($url,$header);
        getIPLoc_QQ('152.54.41.1');

    }
    public function test5(){
        $a=I('post.ip');
        $ip = getIPLoc_sina($a);
        $this -> assign('a',$a);
        $this -> assign('ip',$ip);
        $this -> display();
    }
    public function test6(){
        $this -> display();
    }

}