<?php

if(isset($_GET['province']))

{
 $servername='localhost';
 $username='root';
 $password='';
 $dbname = "training";
 $conn=mysqli_connect($servername,$username,$password,$dbname);

    $province = $_GET['province'];
    $result = mysqli_query($conn,"SELECT distinct district FROM facilities where province = '$province'");

    echo "<option value=''>Select District</option>";

    while($row = mysqli_fetch_array($result))
    {
    echo "<option value='$row[0]'>$row[0]</option>";
    
    }
}



?>