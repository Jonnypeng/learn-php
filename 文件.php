<?php 
$arr = scandir("/Users/pengjiang/Sites/");
foreach($arr as $v){
	if(!is_dir("/Users/pengjiang/Sites/" .$v)){
		echo $v."<br>";
	}
	if(is_foopen("/Users/pengjiang/Sites/")){
		
	}
}

?>
