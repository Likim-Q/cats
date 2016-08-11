<?php
    $ch = curl_init();
    $url = 'http://apis.baidu.com/txapi/weixin/wxhot?num='.$_GET['num'].'&rand=1&word='.$_GET['word'].'&page=1&src=%E4%BA%BA%E6%B0%91%E6%97%A5%E6%8A%A5';
    $header = array(
        'apikey:d44aa60bc3d624a18a205d4513b75090',
    );
    // 添加apikey到header
    curl_setopt($ch, CURLOPT_HTTPHEADER  , $header);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    // 执行HTTP请求
    curl_setopt($ch , CURLOPT_URL , $url);
    $res = curl_exec($ch);
	echo $res
?>