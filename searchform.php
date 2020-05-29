<form action="<?php print home_url('/'); ?>" method="get" id="searchform">
    <input type="text" name="s" id="s" placeholder="Search..." value="<?php 
				if(isset($_GET['s'])){
					print $_GET['s'];
				}																   
		   ?>"></input>
    <input type="submit" name="submit" value="&#128269;" id="search-btn">
</form>