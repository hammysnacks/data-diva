<html>
<body>
		
			
			<div id="links">
				<div class="interests">
					
						<a href="/images/data-icon.jpg" id='link_content'><img src="/images/data-icon.jpg"></a>
						<a href="programs/bwh-training"><img src="/images/data-icon.jpg"></a>
						<a href="programs/"><img src="/images/data-icon.jpg"></a>
						<p class="label">programs</p>
						
				</div>


			
			<br>
			
				<div class="interests">
					
						<a href="designs/healthsouk"><img src="/images/data-icon.jpg"></a>
						<a href="designs/transfers"><img src="/images/data-icon.jpg"></a>
						<a href="designs/volume"><img src="/images/data-icon.jpg"></a>
						<p>designs</p>
						
				</div>
			
			<br>
			
				<div class="interests">
					
						<a href="inspire/logic"><img src="/images/data-icon.jpg"></a>
						<a href="inspire/logicdesign"><img src="/images/data-icon.jpg"></a>
						<a href="inspire/design"><img src="/images/data-icon.jpg"></a>
						<p>odds & ends</p>
						
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