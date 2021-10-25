<?php
    session_start();
    include_once('dbconfig.php');

    $db_host=constant('DB_HOST');
    $db_user=constant('DB_USERNAME');
    $db_password=constant('DB_PASSWORD');
    $db_name=constant('DB_NAME');

    $con = mysqli_connect($db_host, $db_user, $db_password,$db_name);
    mysqli_set_charset($con, "utf8");


    $currentForm = $_POST['currentForm'];

    switch ($currentForm) {
        case 'signup':
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $password = md5($_POST['password']);

            $query  = "INSERT INTO `users`(`email`, `fname`, `lname`, `phone`, `password`) VALUES ('$email', '$fname', '$lname', '$phone', '$password')";
            
            if(mysqli_query($con, $query)){
                echo "success";
                return;
            }else{
                echo "error";
                return;
            }

            break;
        
        case 'login':
            $email = $_POST['email'];
            $password = md5($_POST['password']);

            $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
            $result = mysqli_query($con, $query);
            if(mysqli_num_rows($result) > 0){
                $result = mysqli_fetch_array($result);
                $_SESSION['user_name'] = $result['fname'].' '.$result['lname'];
                echo "success";
                return;
            }else{
                echo "error";
                return;
            }
            break;
        
        default:
            # code...
            break;
    }




?>