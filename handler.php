<?php 

include('db.php');

$login = mysqli_real_escape_string($link, $_POST['login']);
$pass1 = mysqli_real_escape_string($link, $_POST['pass1']);
$pass2 = mysqli_real_escape_string($link, $_POST['pass2']);
$email = mysqli_real_escape_string($link, $_POST['email']);
$gender = mysqli_real_escape_string($link, $_POST['gender']);

if ($login != '' && $pass1 != '' && $pass2 != '') {
    if ($pass1 == $pass2) {
        $query = "SELECT user_id FROM users WHERE login = '$login'";
        $result = mysqli_query($link, $query);
        if (mysqli_num_rows($result) === 0) {
            $query = "SELECT user_id FROM users WHERE email = '$email'";
            $result = mysqli_query($link, $query);
            if(mysqli_num_rows($result) === 0) {
                $query = "SELECT user_id FROM users WHERE gender = '$gender'";
                $result = mysqli_query($link, $query);
                if (mysqli_num_rows($result) === 0) {
                    $query = "INSERT INTO users (login, pass, email, created_date, gender)
                    VALUES('$login', '$pass1', '$email', NOW(), '$gender')";
                    $result = mysqli_query($link, $query);
                        if ($result) {
                            header('Location: login.php');
                        } else {
                            header('Location: signup.php?error=db_error');
                            exit;
                        }
                    } else {
                        header('Location: signup.php?error=gender_exist');
                        exit;  
                    }
            } else {
                header('Location: signup.php?error=email_exist');
                exit;  
            }
        } else {
            header('Location: signup.php?error=login_exist');
            exit;        
        }
    } else {
        header('Location: signup.php?error=pass_error');
        exit;
    }
} else {
    header('Location: signup.php?error=empty_fields');
    exit;
}
