<!DOCTYPE>
<html>
<head>
	<title>The Data Diva</title>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />	
	
	<link rel="icon" href="images/favicon.ico" type="image/x-icon"> 
	
	<!-- Load CSS files -->
	<link rel="stylesheet" type="text/css" href="../style.css" />

		<link rel="stylesheet" href="/colorbox.css" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script src="../colorbox/jquery.colorbox.js"></script>
		<script>
			$(document).ready(function(){
				//Fadeins-images only
				$(".healthsouk").colorbox({rel:'healthsouk', transition:"fade"});
				$(".teny").colorbox({rel:'teny', transition:"fade"});
				$(".volume").colorbox({rel:'volume', transition:"fade"});
				
				//Inlines-text
				$(".vba").colorbox({inline:true, width:"50%"});
				$(".ted").colorbox({inline:true, width:"50%"});
				$(".blogs").colorbox({inline:true, width:"50%"});

				
				//Example of preserving a JavaScript event for inline calls.
				$("#click").click(function(){ 
					$('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
					return false;
				});
			});
		</script>
    	    


</head>

<body>	
	
		<div id="content">
			
			<div id="banner">
				<a href="index"><img src="/images/logo2.jpg"></a>
			</div>
						
			
			
			
			
				<?=$content;?> 
			
			
			
			
			
			
			<div id="contact">
				<a href="resume.pdf">
					<img src="../images/resume.jpg" style="vertical-align:middle" alt="View my resume"></a>
			
				<a href="http://www.linkedin.com/pub/vivian-li/14/6/991" style="text-decoration:none;">
					<img src="http://www.linkedin.com/img/webpromo/btn_in_20x15.png" width="20" height="15" 							alt="LinkedIn profile" style="vertical-align:middle" border="0"></a>
				
				<a href="mailto:vivian.s.li@gmail.com">
					<img src="../images/mail.png" width="20" style="vertical-align:middle" alt="Email me"></a>
			
			</div>
			
		</div>
		



</body>
</html>