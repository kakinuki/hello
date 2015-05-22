<?php
 //認証処理
 
 //リクエストヘッダーの試見
 //echo "<pre>";
 //print_r(getAllHeaders());
 //echo "</pre>";
 //exit;
 
 $success = false;
 $url="";
 
 if($success){
 $url="page2.php";
  //認証成功
//  header("Location: page2.php");

 }else{
 $url="index.php?error=1";
  //認証失敗
//  header("Location: index.php?error=1");
 }

  header("Location: ".$url);