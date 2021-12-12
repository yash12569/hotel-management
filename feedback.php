<?php
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$phone=$_POST['phonenumber'];
$country=$_POST['country'];
$subject=$_POST['subject'];

$connection = mysqli_connect('localhost','root','','hotelmanagement');
if(!$connection)
{
echo "Connection failed"; 
}

if(isset($_POST['submit'])){

    $insert_query = "INSERT INTO `feedback` (`FirstName`, `LastName`, `PhoneNumber`, `Country`, `Subject`) VALUES ('$firstname', '$lastname', '$phone', '$country', '$subject')";

    if(mysqli_query($connection, $insert_query)){
        echo "Data inserted"."<br>";
        header("refresh:3; url= welcome.php");
    }else{
        echo "Insertion failed"."<br>";
        header("refresh:3; url=welcome.php");
    }
}
else{
    echo "Some Error occured";
    header("refersh:2; url=index.html");
}
?>