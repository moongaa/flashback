<?php

include 'CreateDB.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $current_nickname = $_POST["current_nickname"];
  $new_nickname = $_POST["new_nickname"];


  $sql = "UPDATE users SET nickname='$new_nickname' WHERE nickname='$current_nickname'";
  $result = mysqli_query($connect, $sql);


  if ($result) {
    echo "닉네임이 변경되었습니다.";
  } else {
    echo "닉네임 변경에 실패했습니다.";
  }
}

mysqli_close($conn);
?>
