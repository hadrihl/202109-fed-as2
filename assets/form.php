<?php
    if(isset($_POST['submit']))
    {
        $fname = $_POST['name'];
        $femail = $_POST['email'];
        $fpasswd = $_POST['passwd'];

        //database
        $host = "localhost";
        $username = "user1";
        $password = "abc123";
        $dbname = "account_db";

        // create conn
        $conn = mysqli_connect($host, $username, $password, $dbname);

        if(!$conn) {
            die("Connection failed!" . mysqli_connect_error());
        }

        $sql = "INSERT INTO acc (id, name, email, passwd) VALUES ('8', '$fname', '$femail', '$fpasswd')";

        $rs = mysqli_query($conn, $sql);

        if($rs) {
            //echo "Successfully saved";
            //header("Location: ../index.html");
        }

        //connection close
        mysqli_close($conn);
    }
?>

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard - Client</title>
    <meta http-equiv="refresh" content="2;url=../index.html">
<head>
<body>
    <p>Successful! Redirecting... </p>
</body>
</html>