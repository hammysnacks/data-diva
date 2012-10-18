<html>
<body>
			<br><br>
			
			<div id="links">
				<div class="analyze">
					<img src="../images/analyze.jpg">
					<img src="../images/divider.gif"> 
					<a href="index/program">programs</a>
				</div>
			
			<br>
			
				<div class="design">
					<img src="../images/design.jpg">
					<img src="../images/divider.gif">
					<a href="index/design">data visualization</a>
				</div>
			
			<br>
			
				<div class="inspire">
					<img src="../images/inspire.jpg">
					<img src="../images/divider.gif">
					<a href="index/inspire">odds & ends</a>
				</div>
			
			</div>
			
			<div id="quote">
			<p><em>The best way to have good ideas is to have a lot of ideas.</em> <br>
				Linus Pauling
			</p>
			</div>
		
			<div id="datagraph">
			
				<?php
		
				$pink = rand(0,9);
				
				$bars="";
				for($i=0;$i<10;$i++){
				
					$height=rand(20,100);
					$opacity=$height/100;
					
					if ($i==$pink){
				
					echo $bars."<div style='
					width:48px; 
					height:".$height."; 
					margin:1px; 
					background-color:#be2a73;
					opacity:".$opacity.";
					display:inline-block;'>
					</div>";}
					
					else {
					echo $bars."<div style='
					width:48px; 
					height:".$height."; 
					margin:1px; 
					background-color:#0b4e7c; 
					opacity:".$opacity.";
					display:inline-block;'>
					</div>";
					}

				}
			?>
				</div>
		</body>
</html>