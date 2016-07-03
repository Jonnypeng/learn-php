<?php 
function fun1($m,$n){
	if($m==0 || $n==0){
		return 0;
	}else{
		$a = $m*$n;
		return $a;
	}
};

$p=2;
$h=3;

echo fun1($p,$h);
?>

	<?php 
function fun2($m,$n=1,$x=2){  //后面两个为初始值，宰参数传递的过程中可以被覆盖，否则作为默认值
	 $a = $m*$n*$x;
	  return $a; 
}
$p = 2;
echo fun2($p) ."<br>";
echo fun2($p,2) ."<br>";
echo fun2($p,3,3) ."<br>";
?>

	<?php 
function fun3(&$n){
 $n = $n * $n;
};

$pe = 2;
fun3($pe);  ／／//这里$pe传递给函数的其实是$pe的变量内容所处的内存地址，通过在函数里改变$n的值　就可以改变$p的值了
echo $pe;
?>
