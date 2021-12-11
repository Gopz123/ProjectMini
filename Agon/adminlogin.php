<?php
session_start();
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>AGON ASCA</title>
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
        <link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/jquery.nivo.slider.js" type="text/javascript"></script>
        <script type="text/javascript">
             $(window).load(function() {
	         $('#slider').nivoSlider({
		     effect:'random',
		     slices:15,
		     animSpeed:500,
		     pauseTime:3000,
		     startSlide:0, //Set starting Slide (0 index)
		     directionNav:false, 
		     directionNavHide:false, //Only show on hover
		     controlNav:true, //1,2,3...
		     controlNavThumbs:false, //Use thumbnails for Control Nav
		     pauseOnHover:true, //Stop animation while hovering
		     manualAdvance:false, //Force manual transitions
		     captionOpacity:0.8, //Universal caption opacity
		     beforeChange: function(){},
		     afterChange: function(){},
		     slideshowEnd: function(){} //Triggers after all slides have been shown
	         });
             });
        </script>
    </head>
    <body>
        <div id="templatemo_wrapper">
            <div id="templatemo_header">
                <h1 style="color:white;text-align: center;font-size: 50px;">AGON ASCA</h1>
            </div> <!-- end of header -->
                 <div id="templatemo_menu">
                <ul>
                    <li><a href="StudentRegistration.php">Student Registration</a></li>
                    <li><a href="EventRegistration.html">Event Registration</a></li>
                    <li><a href="contactus.html">Entries</a></li>
                    <li><a href="Live_Reg.php">Live</a></li>
                    <li><a href="view_event.html">Winners</a></li>
                 
                </ul>       
            </div> <!-- end of templatemo_menu -->
            <div id="slider_wrapper">
                <div id="slider">
                    <a href="#"><img src="1.jpg" alt="01" title="" /></a>
                    <a href="#"><img src="2.jpg" alt="02" title="" /></a>
                    <a href="#"><img src="3.jpg" alt="03" title="" /></a>
                    <a href="#"><img src="4.jpg" alt="04" title="" /></a>
                    <a href="#"><img src="5.jpg" alt="05" title="" /></a>
                    <a href="#"><img src="6.jpg" alt="05" title="" /></a>
                </div>
            </div>
       
        </div>
    </body>
</html>
