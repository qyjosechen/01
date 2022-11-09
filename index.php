<?php
/**
 +-------------------------------------------------------------------------+
 | Author: Jose Chen <jose@airli.cn>                                       |
 | Author: Airli Tian <im@airli.cn>                                        |
 +-------------------------------------------------------------------------+
*/
	//设置时区
	date_default_timezone_set('PRC');
	//读取内容
	@$string=file_get_contents('/index/home.txt');
	//如果$string不为空的时候执行，也就是home.txt中有留言数据
	if(!empty($string)){
		//每一段留言有一个分隔符，但是最后多出了一个&^。因此，我们需要将$^删掉
		$string=rtrim($string,'&^');
		//以&^切成数组
		$arr=explode('&^',$string);
		//将留言内容读取
		foreach($arr as $value){
			list($username,$content,$time)=explode('$#',$value);
			echo '用户名:<font color="gree">'.$username.'</font>内容:<font color="red">'.$content.'</font>时间:'.date('Y-m-d H:i:s',$time);
			echo '<hr/>';
		}
	}
?>
