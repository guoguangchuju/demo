<?php
namespace Home\Model;
use Think\Model;

class TestModel extends Model{
    function test4(){

    }
    function getIPLoc_sina($queryIP){
        $url = 'http://int.dpool.sina.com.cn/iplookup/iplookup.php?format=json&ip='.$queryIP;
        $ch = curl_init($url);
        //curl_setopt($ch,CURLOPT_ENCODING ,'utf8');
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true) ; // 获取数据返回
        $location = curl_exec($ch);
        $location = json_decode($location);
        curl_close($ch);
        $loc = "";
        if($location===FALSE) return "";
        if (empty($location->desc)) {
            $loc = $location->province.$location->city.$location->district.$location->isp;
        }else{
            $loc = $location->desc;
        }
        dump($loc);
        return $loc;
    }
}