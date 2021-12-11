<?php
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>AgonAsca</title>
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <link href="templatemo_style.css" rel="stylesheet" type="text/css" />
        <script language="javascript" type="text/javascript">
            function clearText(field)
            {
             if (field.defaultValue == field.value) field.value = '';
             else if (field.value == '') field.value = field.defaultValue;
            }
        </script>
        <script type="text/javascript" src="js/jquery.min.js"></script> 
        <script type="text/JavaScript" src="js/slimbox2.js"></script> 
        <link rel="stylesheet" href="css/slimbox2.css" type="text/css" media="screen" /> 
    </head>
    <body>
        <div id="templatemo_wrapper">	
            <div id="templatemo_header">
   	  	        <h1 style="color:white;text-align: center;font-size: 50px;">AGON ASCA</h1>
            </div> <!-- end of header -->
            <div id="templatemo_menu">
                               <ul>
                    <li><a href="index.html" >Home</a></li>
                    <li><a href="aboutus.html">AboutUs</a></li>
                    <li><a href="contactus.html">ContactUs</a></li>
                    <li><a href="view_event.html">Guest</a></li>
                    <li><a href="Login.html">Asca Member</a></li>
                    <li><a href="admin.html" class="current">Admin Login</a></li>
                </ul>       
            </div> <!-- end of templatemo_menu -->
            <div id="templatemo_main">
                <div class="col_w900 col_w900_last">
                    <div class="col_w420 float_l">
                        <h3>Admin Login Form</h3>
                        <div id="cp_contact_form">
                           <form method="POST"  action="">
                                <label for="author">User Name:</label> 
                                <input name="user" type="text" class="input_field"  maxlength="60" />
                      	        <div class="cleaner_h10"></div>
                                <label for="email">Password</label>                                     
                                <input name="pwd" type="password" class="input_field"  maxlength="60" />
                          	    <div class="cleaner_h10"></div>
                                <div class="cleaner_h10"></div>
                                <label for="text"></label>
                                <input type="submit" class="submit_btn float_l" name="submit" id="submit" value="Login Now" />
                                <input type="reset" class="submit_btn float_r" name="reset" id="reset" value="Reset" />
                            </form>
                        </div>
                    </div>
                </div>
                <div class="cleaner"></div>
                <span class="bottom"></span>    
            </div> <!-- end of main -->
        </div> <!-- end of templatemo_wrapper -->
    </body>
</html>
<?php 
$connection = mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,'agonasca');
if(isset($_POST['submit']))
{
  $name=$_POST['user'];
  $pass=$_POST['pwd'];
  $query=mysqli_query($connection ,"SELECT * FROM `admin` WHERE `username`='$name' && `password`='$pass'");
  $rowcount=mysqli_num_rows($query);
  if($rowcount==true)
  { $uname=$row['username'];
    $_SESSION['uname'];
  header('Location:adminlogin.php');
  }
}


?>