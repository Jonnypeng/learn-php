<?php 

	$a = 5;
	echo $a++;  //$a = $a + 1;5 只做运算，没有赋值
	echo "<br>";
	echo $a;

	$b =5 ;
	echo "<br>";
	echo ++$b;  //运算并且赋值

	$c = "abc";
	$d = "efg";
	echo "<br>";
	echo $c.$d;

	echo 5 >4;

	switch($a){
		case 6 :
			echo "6";
			break; 	//跳出
			case 7:
				echo "7";
				break;
				default :
					echo "no";
	}	

?>
