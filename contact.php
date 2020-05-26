<?php

	if(isset($_POST['email']))
	{
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$subject = $_POST['subject'];

        include 'db.php';
        
			$query = "INSERT INTO users(
			firstname,
			lastname,
            subject,
			role) VALUES (
			'$firstname',
			'$lastname',
			'$subject',
			'client')";



?>

<html class="slideInRight">
    <heading>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./Contact/contact.css">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <link rel="stylesheet" href="./Font/azonix.css">
        <link rel="stylesheet" href="./Font/Alerion.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    </heading>
    
    
    
    <body>
        
        
        <div class="nav">
            
                <div id="mySidenav" class="sidenav">
                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                        <a href="portindex.html">Home</a>
                        <a href="About.html">About</a>
                        <a href="gallery.html">Gallery</a>
                        <a href="posts.html">Posts</a>
                        <a href="Services.html">Services</a>
                        <a href="contact.html">Contact</a>
                </div>
             </div>
        
        <div id="main">

            <div class="head">
            <div class="heading">

                <div class="openbtn" onclick="openNav()" >&#9776;</div> 

                <h2 style="margin-left:5%">C&nbsp;O&nbsp;N&nbsp;T&nbsp;A C T&nbsp;&nbsp;U S</h2>
		
                <div class="media">
	               <ul>
                        <a href="https://www.facebook.com/athrava.tulsi" class="facebook"><img src="./Index_img/logo/facebook-logo (1) (1).png" width="10%"; label="facebook"></a>
                        <a href="https://www.instagram.com/atharva.tulsi" class="instagram"><img src="./Index_img/logo/instagram.png" width="10%"; label="instagram"></a>
                        <a href="https://unsplash.com/@atharva_tulsi" class="unsplash"><img src="./Index_img/logo/1_r8AYd7cbKl_6fs61eHj-WQ.png" width="10%"; label="unsplash"></a>
                        <a href="mailto:atharva.tulsi@gmail.com" class="mail"><img src="./Index_img/logo/gmail.png" width="10%"; label="gmail"></a>
                </ul>
                </div>
	   
                </div>
            </div>
           
               <div class="main1">
                   <div id="section">
                       <h2>A T H A R V A &nbsp;T U L S I</h2>
                       <p id="target">we would really like to help you .</p>
                       <div class="email"><img src="./Contact/logo/gmail.png" width="8%"><p>atharva.tulsi@gmail.com</p></div>
                       <div class="call"><img src="./Contact/logo/Whatsapp%20Transparent%20Black.png" width="8%"><p>Tel. +91 - 9823158155</p></div><br>
                       
                   </div>
                   
                   <div id="aside">
                   <div class="container">
                       <form action=""  method="post" enctype="multipart/form-data">
                           
                           <label for="fname">First Name</label>
                           <input type="text" id="fname" name="firstname" placeholder="Your name.." style=" font-size:1vw;">

                           <label for="lname">Last Name</label>
                           <input type="text" id="lname" name="lastname" placeholder="Your last name.." style="font-size:1vw;">
                           
                           <label for="lname">Email Id</label>
                           <input type="text" id="email" name="email" placeholder="Your Email ID.." style="font-size:1vw;">

                           <label for="subject">Subject</label>
                           <textarea id="subject" name="subject" placeholder="Write something.." style="height:150px; font-size:1vw;"></textarea>

                           <input type="submit" value="Submit">
                       </form>
                       </div>
                   </div>
                </div>
         </div>

    </body>
<script src="portjscript.js">
        </script>
</html>