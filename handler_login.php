<?php 

include('db.php');

$login = mysqli_real_escape_string($link, $_POST['login']);
$pass1 = mysqli_real_escape_string($link, $_POST['pass1']);

if ($login != '' && $pass1 != '') {
        $query = "SELECT user_id FROM users WHERE login = '$login' AND pass = '$pass1'";
        $result = mysqli_query($link, $query);
    if (mysqli_num_rows($result)) {
        header('Location: cp.php');
    } else {
        header('Location: login.php?error=pass_error');
        exit;
    }
} else {
    header('Location: login.php?error=empty_fields');
    exit;
}
