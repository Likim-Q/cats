<?php
    $ch = curl_init();
    $url = 'http://apis.baidu.com/bbtapi/constellation/constellation_query?consName='.$_GET['consName'].'&type='.$_GET['type'];
    $header = array(
        'apikey:d44aa60bc3d624a18a205d4513b75090',
    );
    // 添加apikey到header
    curl_setopt($ch, CURLOPT_HTTPHEADER  , $header);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    // 执行HTTP请求
    curl_setopt($ch , CURLOPT_URL , $url);
    $res = curl_exec($ch);
   	echo $res;
?>