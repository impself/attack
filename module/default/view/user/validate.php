<?php

$link = mysqli_connect("localhost", "hrt123456", "hrt102600srx", "ef",3306);

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

    $name=$_POST['username'];

    $pwd=$_POST['password'];

    $sql="select * from test_user where username='$name' and password='$pwd'";

	$result = mysqli_query($link, $sql);

	$obj = $result->fetch_object();


    if($obj){



    }else{

    }
	mysqli_close($link);
?>