<?php
    $username = $_POST['uid'];
    $password = $_POST['pwd'];

    $username = stripcslashes($username);
    $password = stripcslashes($password);
    $username = pg_real_escape_string($username);
    $password = pg_real_escape_string($password);

    $host = "ec2-54-235-139-166.compute-1.amazonaws.com";
    $db = "d2aln19jkoqgc5";
    $user = "dbzoashpxvqhmp";
    $pw = "1d18b71cc013c47de2c56d8e5970d0aab6ed70c04d1b2d2f6ef73ae37b9cfdb8";
    pg_connect("host=$host port=5432 dbname=$db user=$user password=$pw");
    pg_select_db("ATNSHOP");

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
