<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(isset($_POST['current_password']) && isset($_POST['new_password']) && isset($_POST['confirm_password'])) {
       
        $current_password = $_POST['current_password'];
        $new_password = $_POST['new_password'];
        $confirm_password = $_POST['confirm_password'];

       
        if($current_password == 'current_password' && $new_password == 'new_password' && $confirm_password == 'new_password') {
            echo "Password changed successfully";
        } else {
            echo "Password change failed";
        }

    } else {
        echo "Please fill out all the fields";
    }
}
?>