<?php

class NewsController extends Controller {

    public function viewAction() {
    	//加一个注释
    	$arr = array(26,8,57,588,457,6684,'a'=>2);
    	array_push($arr);
    	
    	//插入排序法
    	for ($i=0; $i < count($arr) ; ++$i) { 
    		$j = $i;
    		$index = $arr[$i];
    		while ($j >0 && $index < $arr[$j-1]) {
    			$arr[$j] = $arr[$j-1];
    			$j--;
    		}
    		$arr[$j] = $index;
    	}
    	print_r($arr);
    	die();
    	//选择排序
    	for ($i=0; $i < count($arr)-1; $i++) { 
    		$index = $i;
    		for ($j=$i+1; $j < count($arr); $j++) { 
    			if ($arr[$j] < $arr[$index]) {
    				$index = $j;
    			}
    			if ($index != $i) {
    				$temp = $arr[$index];
    				$arr[$index] = $arr[$i];
    				$arr[$i] = $temp;
    			}
    			
    		}
    	}
    	print_r($arr);
    	die();
    	//冒泡排序
    	for($i=0; $i<count($arr)-1; ++$i) 
    	{
    		for($j=0; $j<count($arr)-$i-1; ++$j) 
    		{
    			if($arr[$j] > $arr[$j+1]) {
    				$temp = $arr[$j];
    				$arr[$j] = $arr[$j+1];
    				$arr[$j+1] = $temp;
    			}
    		}
    	}
    	print_r($arr);
    	//var_dump($arr);
    	die();


    	$reg = "/(\w)+@\w(\.\w){0,3}/";
    	$result = preg_match($reg, '50qq.com.cn.com.coo');
    	echo $result;
    	die();

$name = basename('D:/project/','.php');
echo $name;
die();

    	$ch = curl_init();
    	var_dump($ch);
    	die();

// 设置URL和相应的选项
curl_setopt($ch, CURLOPT_URL, "http://www.baidu.com/");
curl_setopt($ch, CURLOPT_HEADER, 0);

// 抓取URL并把它传递给浏览器
echo curl_exec($ch);

// 关闭cURL资源，并且释放系统资源
curl_close($ch);
die();




    	$ftp_server = 'localhost';
		$conn_id = ftp_connect($ftp_server) or die("Couldn't connect to $ftp_server");
		echo $conn_id;
		die();
    	$subject = "abcdeF";
		$pattern = '/^a[a-z]*def/i';
		$result = preg_match($pattern, $subject);
		print_r($result);
		die();
    	$test = 'hello world';
    	$this->display('test',$test);

    	// $a = '123456sdf';
    	// $str = strrev($a);
    	// echo print($str);
    	// die();
    	// $b = 456454;
    	// $a = explode('_', $a.'_'.$b);
    	// $b = $a[0];
    	// $a = $a[1];
    	
    	// $a .= $b;
    	// $b = substr($a, 0,strlen($a)-strlen($b));
    	// $a = substr($a, strlen($b));
    	// echo $a.'</br>';
    	// echo $b;
    	// die();

    	// var_dump(explode(' ',microtime()));
    	// die();
     //    $result = DB::table('Test')->findByNickname();
     //    print_r($result);
     //    die();
    }


}