<?php
namespace Home\Controller;
use Org\Net\IpLocation;
use Think\Controller;
class TestController extends Controller{
    public function test_ip(){
        if (IS_POST){
            $post = I('post.');
            if ($post[ip]==''){
                $this->error('IP地址不得为空，请重新输入！！！');exit();
            }
            //dump($post);
            $ipd = explode(".",$post['ip']);
            //dump($ipd);
            if (count($ipd) == 4){
                if ((0 < $ipd[0] &&$ipd[0]< 256)&& (0 <= $ipd[1] &&$ipd[1]< 256)&& (0 <= $ipd[2] &&$ipd[2]< 256)&& (0 <= $ipd[3] &&$ipd[3]< 256)){
                    //echo "ip地址合法"
                    //$Ip = new IpLocation('UTFWry.dat');
                    $Ip = new IpLocation('qqwry.dat'); //gbk
                    $ip_data = $post['ip'];
                    $arr = $Ip-> getlocation($ip_data);
                    //dump($post['ip']);
                    //$data = get_client_ip();
                    //echo $post['ip'];
                    //dump($arr);
                    //echo "ip所在区域为: ".$arr['area'];
                    $ipdata = $arr['country'].$arr['area'];
                    $ipdata=iconv("GBK", "UTF-8", $ipdata);
                    $this -> assign('ipdata',$ipdata);
                    $this -> display();
                }
            }else{
                $this->error('请输入合法的IP地址！！');
            }
        }else{
            $this -> display();
        }
    }
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
        dump($arr);
        $this -> assign('arr',$arr);
        $this->display();
    }
}