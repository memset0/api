<?php
// 获取每日必应壁纸
// DEMO地址: api0.cf/bing.php
// 直接返回图片因此可以直接当作图片来引用
// 如在HTML代码中调用 <img src="bing.php" />
$str=file_get_contents('https://cn.bing.com/HPImageArchive.aspx?format=js&idx=0&n=1');
$imgurl='https://cn.bing.com'.explode('"', explode('url":"', $str)[1])[0];
if($imgurl){
  header('Content-Type: image/JPEG');
  @ob_end_clean();
  @readfile($imgurl);
  @flush(); @ob_flush();
  exit();
}else{
  exit('error');
}
