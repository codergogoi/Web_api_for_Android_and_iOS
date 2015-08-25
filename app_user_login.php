<?php
    
    
    $db = mysql_connect('localhost', 'demox', 'demox123') or die('Could not connect: ' . mysql_error());
    mysql_select_db('my_apps') or die('Could not select database');
  
    
    
    // Strings must be escaped to prevent SQL injection attack.
    $user_email = mysql_real_escape_string($_POST['email'], $db);
    $user_password = mysql_real_escape_string($_POST['password'], $db);
    
	 if(isset($_POST['email']) && isset($_POST['password'])) {
		 
    	$query = "SELECT * from app_user WHERE user_email='$user_email' AND user_password='$user_password'";
        
    	$result = mysql_query($query) or die('Query failed: ' . mysql_error());
		
		if($result){
			
			echo "200";
		}else{
		
			echo "404";	
		}
        
		
	 }
  
?>