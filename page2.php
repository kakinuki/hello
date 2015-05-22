<html>
<head></head>
<body>
<h1>page2<h1>
<?php
	//POSTデータの受け鳥
	//$id = $_POST["id"];
	$id = "nothing";
	//データが渡されているかチェック
	if(isset($_POST["id"])){
		$id = $_POST["id"] ;
	}
	echo $id;

	$hobby = array();
	if(isset($_POST["hobby"])){
	$hobby = $_POST["hobby"];
	}
	echo"<ul>";
	foreach($hobby as $data){
	       echo"<li>";
			 echo $data;
			 echo"</li>";
	}
	echo"</ul>";
?>
<a href="index.html">
	戻る
</a>
</body>
</html>