<?php
    include "ConnectDB.php";
    $sql_account = "create table account(num int NOT NULL AUTO_INCREMENT PRIMARY KEY, name varchar(10) NOT NULL, id varchar(10) NOT NULL, pw varchar(20) NOT NULL, introduction text)";
    $res_account = mysqli_query($connect, $sql_account);
    if($res_account){
      echo "테이블 생성<br>";
    }
    else {
      echo "fff<br>";
    }

    $sql_gallery = "Create table gallery(name varchar(10) NOT NULL, title varchar(20) NOT NULL, contents text, image MEDIUMBLOB, data timestamp NOT NULL)";
    $res_gallery = mysqli_query($connect, $sql_gallery);
    if($res_gallery){
      echo "테이블 생성<br>";
    }
    else {
      echo "ffff<br>";
    }

    $sql = "ALTER table account default character set utf8 collate utf8_general_ci";
    $res = mysqli_query($connect, $sql);
    if($res){
      echo "글씨체 바꾸기 성공(아마?)<br>";
    }
    else {
      echo "ffff";
    }
    $sql = "ALTER table gallery default character set utf8 collate utf8_general_ci";
    $res = mysqli_query($connect, $sql);
    if($res){
      echo "글씨체 바꾸기 성공(아마?)<br>";
    }
    else {
      echo "ffff";
    }
 ?>
