
 <!DOCTYPE HTML> 
 <html> 
 <head> 
 <title>Sign-In</title>
 <link rel="icon" href="eye.ico" type="image/x-icon">
 </head>
 
<style>
#body-color{ background-color:green; } 
#Sign-Up{ background-image:url('sign-up.png');
 background-size:500px 500px; 
 background-repeat:no-repeat;
 background-attachment:fixed; 
 background-position:center;
 margin-top:150px; 
 margin-bottom:150px;
 margin-right:150px; 
 margin-left:450px;
 padding:9px 35px; 
 } 
 td,legend{
 color:white;
 }
  
 #button
 { 
 border-radius:10px;
 width:100px;
 height:40px; 
 background:#FF00FF; 
 font-weight:bold; 
 font-size:20px; 
 }
 
<!--Videoback ground start -->
 
 * {
				margin: 0;
				padding: 0;
			}
			body {
				font-family: Calibri, sans-serif;
			}
			.background-wrap {
				position: fixed;
				z-index: -1000;
				width: 100%;
				height: 100%;
				overflow: hidden;
				top: 0;
				left: 0;
			}
			
			#video-bg-elem {
				position: absolute;
				top: 0;
				left: 0;
				min-height: 100%;
				min-width: 100%;
			}
			.content {
				position: absolute;
				width: 100%;
				min-height: 100%;
				z-index: 1000;
				background-color: rgba(0,0,0,0.7);
			}
			.content h1 {
				text-align: center;
				font-size: 65px;
				text-transform: uppercase;
				font-weight: 300;
				color: #fff;
				padding-top: 15%;
				margin-bottom: 10px;
			}
			.content p {
				text-align: center;
				font-size: 20px;
				letter-spacing: 3px;
				color: #aaa;
			}
 

 <!---vedio background  end-->

</style> 

 <body id="body-color">   
 
 
<!--vedio background body start -->
		<div class="background-wrap">
			<video id="video-bg-elem" autoplay loop muted > 
				<source src="flow.mp4" type="video/mp4">
				Video not supported
			</video>          
		</div>


	<!--vedio background body end-->
	
 <div id="Sign-Up"> 
 <fieldset style="width:100%">
 
 <table border="0">
 <tr> <form method="POST" action="loginpage.php"> 
 <tr> <td>Username</td><td> <input type="text" name="user"></td> </tr> 
 <tr> <td>Password</td><td> <input type="password" name="pass"></td> </tr> 
 
 <tr> <td><input id="button" type="submit" name="submit" value="Sign-In"></td> <td><a href="signup.php"><font color='yellow'>Havent Registered yet?</font></a> </button></tr>
  
  
 </form> 
 </table> 
 </fieldset> 
 </div> 
 </body>
 </html>

 