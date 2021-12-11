
<!doctype html>
<html>
<head>
<title>Live Stream</title>
</head>
<meta charset="utf-8">
<style>
  body{
     background-image: url(care3.jpg);
     background-size: cover;
    }
     #p2 {
  color:black;
  }
  button{
       
       text-align:center;
       margin: 6px 5px;
       font-size: 20px;
       padding:10px 15px;
       border-radius:6px;
       transition-duration:0.4s;
}
.buttonshadow{
      background-color:white;
      color:black;
      border:1px solid #006600;
      box-shadow: 10px 10px 10px #006600;
}
.buttonshadow:hover{
     background-color:#006600;
     color:white;
     box-shadow: 10px 10px 10px grey;
     }
.buttonposition{
  position:relative;
  bottom: 350px;
  left:600px;
}      
.buttonposition2{
  position:relative;
  bottom: 350px;
  right:600px;
}
</style>

<body>
<div class="inputBox">

  <center>
  <div id="p2"> 
<h1><center><u> Live Stream </u></center></h1>

<div class="box">
<form   action="" method="POST">
<table border = 2px solid Black style="width:50%; text-align:left;">
<form>
<tr>
<th colspan="2"> <center>New Live</center> </th>
</tr>
<tr>
 <td><label for="Event"><b>Event</b></label></td>
 <td><input type="text" name="Event"></td>
</tr>
<tr>
 <td><label  for="Time"><b>Time</b></label></td>
 <td><input type="text" name="Time"></td>
</tr>
<tr>
<td><label  for="Date"><b>Date</b></label></td>
 <td><input type="text" name="Date"></td>
</tr>
<tr>
<td><label  for="Link"><b>Link</b></label></td>
<td><input type="text" name="Link"></td>
</tr>
<tr>
<td colspan="2"><center><input  type="submit" name="submit" value="Create"></center></td>
</tr></table>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<br><br>
<table border="4" align="center">
            <font color="white">
             <tr>
             <th colspan="5" align="center"><h2>Live Events</h2></th>
             </tr> 
             <tr>
              <th>Event</th> 
              <th>Time</th> 
              <th>Date</th>
              <th>Link</th>
              </tr> 
            </font>
           
</form>

</center>

</div>
</div>
</div>
<?php
$connection = mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,'agonasca');
$query2 = " SELECT * FROM `live`  ";
$query_run = mysqli_query($connection,$query2);
     while($row = mysqli_fetch_array($query_run))
    {
      ?>
      <tr>
      <td><?php echo $row['Event']; ?></td>
      <td><?php echo $row['Time']; ?></td> 
      <td><?php echo $row['Date']; ?></td>
      <td><?php echo $row['Link']; ?></td>
      <td><a href="delete.php?id=<?php echo $row['Event_Id']; ?>">Delete</a></td></tr>
    <?php
    }

if(isset($_POST['Event'])||isset($_POST['Time'])||isset($_POST['Date']))
{
$Event=$_POST['Event'];
$Time=$_POST['Time'];
$Date=$_POST['Date'];
$Link=$_POST['Link'];

if(isset($_POST['submit']))
{
     $connection = mysqli_connect("localhost","root","");
     $db=mysqli_select_db($connection,'agonasca');
     $insert="INSERT INTO `live`(`Event`,`Time`,`Date`,`Link`)values('$Event','$Time','$Date','$Link')";
     mysqli_query($connection,$insert);
     header('Location:Live_Reg.php');
}    
}

?>
</table>
</body>
</html>