<?php
//エラーチェック
   $error_message = "";
   if(isset($_GET["error"])){
    $error=$_GET["error"];
    $error_no=$_GET["error"];
    if($error_no==1){
    $error_message = "<p style='color:red'>認証失敗</p>";
    }else{
    $error_message="<p>予期せぬエラー</p>";
    }
   }

?>
<html>
 <head></head>
 
 <body>
  <a href="login.php">認証</a>
  <?php
  echo $error_message;

  ?>
 </body>
</html>