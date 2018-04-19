<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/4/17 0017
 * Time: 17:06
 */


function getDatas($url, $header)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 3);
    $handles = curl_exec($ch);
    curl_close($ch);
    return $handles;
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
    if (empty($loc)){
        $loc="未查询到".$queryIP."的地址,请检查后重新输入！";
    }else{
        return $loc;
    }
    return $loc;
}

?>