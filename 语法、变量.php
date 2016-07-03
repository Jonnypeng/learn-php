<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
<?php 
	//phpinfo();
 $a = "b";
$$a = "123"; 
	echo $b; //123

 echo '0000\'0000\\';

 $c = 50;

 echo "我有$c 元<br />";    // 变量后有空格，要使用”“可以首先执行变量，若是‘’却不行
	$d = true;
	var_dump($d);

	$d = "123abc";
	$e = (int)$d;
	var_dump($e);

?>			

/*常量*/

	<?php 
	echo __FILE__;	
	echo __LINE__;

	define("NA",123);  //自定义常量
	echo NA;
?>
</body>
</html>
