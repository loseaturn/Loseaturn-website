<script>
/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function navbarCollapse() {
var x = document.getElementById("topnavdiv");
	if (x.className === "topnav") {x.className += " responsive";} 
	else {x.className = "topnav";}
}
</script>

<div class="topnav" id="topnavdiv">
			
	<nav id = "topnavlist">		
		<a><img src ="http://www.loseaturn.com/images/throwlogoV2desktop.png" id="newlogo" alt="logo" /> </a>	<!--//localhost:0-->
		<?php include('navcontents.php'); ?>
	</nav>
</div>