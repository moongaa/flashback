<?php
   $connect = mysqli_connect('localhost','root','');
   mysqli_select_db($connect,'Flashback')or die('DB 접속에러')
 ?>