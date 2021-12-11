<html>
<head>
</head>
<body>
	<form action="" method="POST">
	<label for="events">Event:</label>
	<select name="events">
    <?php 
    $connection = mysqli_connect("localhost","root","");
    $db=mysqli_select_db($connection,'agonasca');
    $query2 = " SELECT * FROM `event` ";
    $query_run = mysqli_query($connection,$query2);
    while($row = mysqli_fetch_array($query_run))
    {?>
    <option value="<?php echo $row['ev_no'];?>"><?php echo $row['ev_name'];?>
    </option>
    <?php	
    }
    ?>
  
	</select>
	<input type="submit" name="submit" value="Show"/>
	<select name ="year" id="year">
		<option value="1">1st Year</option>
		<option value="2">2nd Year</option>
		<option value="3">3rd Year</option>
	</select>
</form>
<table border="4" align="center">
            <font color="white">
             <tr>
             <th colspan="8" align="center"><h2>Entry</h2></th>
             </tr> 
              <tr>
              <th>Entry Id</th> 
              <th>Ktu Id</th> 
              <th>Event Number</th>
              <th>Members</th>
              <th>File</th>
              <th>Status</th>
              <th>Position</th>
              <th>Accept/Reject</th>
              </tr> 
	<?php
	if(isset($_POST['submit']))
	{
	$events=$_POST['events'];
	$connection = mysqli_connect("localhost","root","");
    $db=mysqli_select_db($connection,'agonasca');
    $query2 = " SELECT * FROM `entry` WHERE ev_no=$events";
    $query_run = mysqli_query($connection,$query2);
     while($row = mysqli_fetch_array($query_run))
    {
      ?>
      <tr>
      <td><?php echo $row['ent_id']; ?></td>
      <td><?php echo $row['ktu_id']; ?></td> 
      <td><?php echo $row['ev_no']; ?></td>
      <td><?php echo $row['members']; ?></td>
      <td><?php echo $row['file']; ?></td>
      <td><?php echo $row['status']; ?></td>
      <td><?php echo $row['position']; ?></td>
      <td><a href="approve.php?id=<?php echo $row['ent_id']; ?>">Approve </a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="reject.php?id=<?php echo $row['ent_id']; ?>">Reject</a></td></tr>
    <?php
    }
    }
	?>
</table>
	</body>
	</html>