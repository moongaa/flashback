<?php
    require ('./registerDB.php');
    session_start();
    
    $id = $_POST['id'];
    $id = strtolower($id);
    $passwords = $_POST['password'];
    $password = md5($passwords);

    $sql = "SELECT * FROM register WHERE id='$id' AND password='$password'";
    $result = mysqli_query($connect, $sql);
    $row = mysqli_num_rows($result);
    $a = mysqli_fetch_array($result);



    if($row > 0){  // 로그인 성공
        $_SESSION['id']=$a['id'];
        $sql_user_info = "SELECT * FROM register where id='$id'";
        $result_user_info = mysqli_query($connect, $sql_user_info);
        foreach($result_user_info as $user){
            $name=$user['name'];
        }

        // <!-- 세션입력 : 로그인 -->
        $_SESSION['id'] = $id;
        // ＊ 위 id에 해당하는 여러가지 세션정보들을 담는다. 바로 위 foreach{} 코드 안에서 설정해준 값들만 저장가능하다.
        $_SESSION['name'] = $name;
        echo "<script>window.alert('$id 로그인이 완료되었습니다.')</script>";
        echo "<meta http-equiv='refresh' content='0;url=../home.php'>";
        exit;

    }
     else {  // 로그인 실패
        echo "<script>alert('로그인에 실패하였습니다. 아이디와 비밀번호를 확인하세요.')</script>";
        echo "<meta http-equiv='refresh' content='0;url=login.php'>";
    }
?>