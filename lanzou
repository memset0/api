<?php
// 在线解析蓝奏云直链
// DEMO地址: api0.cf/lanzou.php?[文件id]
// [文件id] 即蓝奏云分享链接中最后的一串字符
ini_set('user_agent','Mozilla/5.0 (Linux; U; Android 6.0.1; zh-CN; SM-C7000 Build/MMB29M) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/40.0.2214.89 UCBrowser/11.6.2.948 Mobile Safari/537.36');
$main = file_get_contents('http://pan.lanzou.com/tp/'.$_SERVER['QUERY_STRING']);
$main = explode('urlpt',$main)[2];
$main = explode('?',$main)[1];
$main = explode('\'',$main)[0];
$main = 'http://120.55.32.134/file/?'.$main;
if ($_SERVER['QUERY_STRING'] == '') $main = 'https://memset0.cn/'
header('Location: '.$main);
