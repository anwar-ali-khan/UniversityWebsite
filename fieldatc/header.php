<?php
require 'connect.php';
?>
	<div id="wrapper">
		<div id="header">
			<div class="box1">
				<marquee scrollamount="2">
					<h2 align="center" class="mar">Welcome to University of Hyderabad</h2>
				</marquee>
			</div>
			<div class="box2">
				<table align="center" class="headlinks">
					<tr>
						<td><a href="admin_pages/login.php" class="head_links" target="_blank">Admin Login</a></td>
						<td><a href="#" class="head_links" target="_blank">Mail</a></td>
						<td><a href="#" class="head_links">Contact</a></td>
					</tr>
				</table>
			</div>
		</div>
		<div id="logo"></div>
		<br>

		
<?php
include 'slideshow.php';
?>
		<p>
		<?php
		include 'navigation.php';
		?>
		