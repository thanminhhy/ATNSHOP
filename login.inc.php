<?php
    $username = $_POST['uid'];
    $password = $_POST['pwd'];

    $username = stripcslashes($username);
    $password = stripcslashes($password);

    pg_connect("host=$host port=5432 dbname=$db user=$user password=$pw");
    pg_select_db("DemoAsm");

    $result = pg_query("select * from users where user_name = '$username' and password = 'password'")
        or die("Failed to query database".pg_error());
    
    $row = pg_fetch_array($result);
    if ($row['username'] == $username && $row['password'] == $password)
    {
        echo "Login success!!!".$row['usernamme'];
    }
    else{
        echo"Failed to login!";
    }
?>
