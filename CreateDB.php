<?php
    include "ConnectDB.php";
    $sql_account = "create table account()";
    $res_account = mysqli_query($connect, $sql_account);
    if($res_b){
      echo "테이블 생성<br>";
    }
    else {
      echo "fff<br>";
    }

    $sql_gallery = "create table gallery(name varchar(20), stu_num int, id varchar(20), password varchar(50), contents text, diary text, primary key(name), key(stu_num))";
    $res_gallery = mysqli_query($connect, $sql_gallery);
    if($res_r){
      echo "테이블 생성";
    }
    else {
      echo "ffff";
    }

    $sql = "ALTER table account default character set utf8 collate utf8_general_ci";
    $res = mysqli_query($connect, $sql);
    if($res){
      echo "글씨체 바꾸기 성공(아마?)";
    }
    else {
      echo "ffff";
    }
    $sql = "ALTER table gallery default character set utf8 collate utf8_general_ci";
    $res = mysqli_query($connect, $sql);
    if($res){
      echo "글씨체 바꾸기 성공(아마?)";
    }
    else {
      echo "ffff";
    }
 ?>
