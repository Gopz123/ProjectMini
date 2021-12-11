<?php
$connection = mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,'agonasca'); // Using database connection file here

$id = $_GET['id']; // get id through query string
$query="DELETE FROM live where Event_Id = '$id'";
$del = mysqli_query($connection,$query); // delete query

if($del)
{
    mysqli_close($connection); // Close connection
    header("location:Live_Reg.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>