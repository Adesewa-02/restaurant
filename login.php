<?php
session_start();
$un=$_POST["username"];
$pw=$_POST["pword"];
$db=mysqli_connect("localhost", "root", "", "inventory");
$sql="SELECT * FROM user WHERE username='$un' AND pword='$pw'";
$r = mysqli_query($db,$sql);
$num=mysqli_num_rows($r);

if($num == 1){
    while($rows = mysqli_fetch_assoc($r))
    {
        $username=$rows["username"] ;
        echo $rows["username"];
        $_SESSION[{"username"}] = $username;
        header("location:navlinks.php");
    }

}

echo '<br>';
echo '<a href="logout.php"Go back';
?>