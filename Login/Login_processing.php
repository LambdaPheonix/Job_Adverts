<!DOCTYPE html>
<html>

<?php
// imported files
include "..\bin\General_functions.php";
include "..\Server_details.php";
// define variables and set to empty values
$uname =  $psw = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // cleans input data
    $uname = sanitizeInput($_POST["uname"]);
    $psw = sanitizeInput($_POST["psw"]);
    // table user name and password is in
    $tbl = "tbl_user_details";
    $msg = '';
    // checks username and password
    if(check_username_password($uname,$psw,$tbl,$msg)){
        $user_id = get_user_id($uname,$tbl);
        echo $msg;
    }  else {
        echo $msg;
    }
}
?>

<head>
    <title>Login_check</title>

    <style>
        .class {
            left: 0;
            width: 100%;
            height: 1000px;
        }
    </style>
</head>
<body>
    <div id='msg' class="msg"><h3>
        <?php echo $GLOBALS['msg']; ?>
    </h3></div>
</body>
</html>
