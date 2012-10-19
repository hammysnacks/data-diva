<html>
<body>
		
			
			<div id="links">
				<div class="interests">
					
						<a href="#vba" class="vba"><img src="/images/vba-icon.jpg"></a>
						<a href="programs/bwh-training"><img src="/images/php-icon.jpg"></a>
						<a href="programs/"><img src="/images/data-icon.jpg"></a>
						<p class="label">programs</p>
						
				</div>


			
			<br>
			
				<div class="interests">
				
						<!-- HealthSouk -->
						<a class="healthsouk" href="/images/healthsouk-patient.jpg" title="HealthSouk's Patient splash page">
						<img src="/images/healthsouk-icon.jpg"></a>
						
						<a class="healthsouk" href="/images/healthsouk-dentist.jpg" title="HealthSouk's Dentist splash page"</a>
						<a class="healthsouk" href="/images/healthsouk-employer.jpg" title="HealthSouk's Employer splash page"></a>
						
						<!-- 10Y transfer -->
						<a class="teny" href="/images/teny.jpg" title="Designed for BWH Trauma department. Used B/W scheme to keep printing 						costs low.">
						<img src="/images/teny-icon.jpg"></a>
						
						<!-- Volume x severe injury transfer -->
						<a class="volume" href="/images/volume.jpg" title="Each small square stand for 1%.">
						<img src="/images/volume-icon.jpg"></a>
						<p>designs</p>
						
				</div>
			
			<br>
			
				<div class="interests">			
					
				
						<a class='ted' href="#ted"><img src="/images/ted-icon.jpg"></a>
						<a class='blogs' href="#blogs"><img src="/images/blog-icon.jpg"></a>

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

						<div style='display:none'>
							<div id='vba' style='padding:20px; background:#fff;'>
							<p><strong>Converts an Excel file into a XML</strong></p><br>
							<p>Meh meh meh meh meh meh meh meh meh meh meh meh meh meh meh meh meh
							 meh meh meh meh meh meh meh meh meh meh meh meh meh meh meh meh 
							 meh meh meh meh meh meh meh meh meh meh meh meh meh meh meh meh 
							 meh meh meh meh meh meh meh meh eh meh meh meh meh meh meh meh meh 
							 meh meh meh meh meh meh meh meh meh meh meh meh meh meh meh meh eh
							 meh meh meh meh meh meh meh meh meh meh meh meh hammy meh meh meh meh
							 eh meh meh meh meh</p>
							<a href="exceltovba.xls" style="float:right;">Download the VBA</a>

							</div>
						</div>	
				
						<div style='display:none'>
							<div id='ted' style='padding:20px; background:#fff;'>
							<p><strong>TED talks on repeat</strong></p><br>
							<li><a href="http://www.ted.com/talks/david_mccandless_the_beauty_of_data_visualization.html">David McCandless on Data Visualization<a><br>
							<li><a href="http://www.ted.com/talks/ken_robinson_says_schools_kill_creativity.html">Ken Robinson on Creativity</a><br>
							<li><a href="http://www.ted.com/talks/sir_ken_robinson_bring_on_the_revolution.html">Ken Robinson on Education Paradigms</a><br>
							<li><a href="http://www.ted.com/talks/j_j_abrams_mystery_box.html"> J.J. Abrams on the Mystery Box</a><br>
							<li><a href="http://www.youtube.com/watch?v=jbkSRLYSojo">Hans Rosling on 200 years in 20 minutes</a><br>
							</div>
						</div>	
						
						<div style='display:none'>
							<div id='blogs' style='padding:20px; background:#fff;'>
							<p><strong>Blogs that inspire me</strong></p><br>
							<li><a href="http://www.modernhepbun.com">Modern Hepburn</a><br>
							<li><a href="http://content.photojojo.com">PhotoJojo</a><br>
							<li><a href="http://www.apartmenttherapy.com">ApartmentTherapy</a><br>
							</div>
						</div>
						
						
						
		</body>
</html>