<?php
    
    
   
    $db = mysql_connect('localhost', 'demox', 'demox123') or die('Could not connect: ' . mysql_error());
    mysql_select_db('my_apps') or die('Could not select database');
  
    
    // Strings must be escaped to prevent SQL injection attack.
    $user_email = mysql_real_escape_string($_POST['email'], $db);
    $user_password = mysql_real_escape_string($_POST['password'], $db);
	// registration date  
    $date = date('Y-m-d H:i:s a');
	
    if(isset($_POST['email'])) {
        // Send variables for the MySQL database class.
        $query = "insert into app_user values (NULL, '$user_email', '$user_password','$date');";
       
        $result = mysql_query($query) or die('Query failed: ' . mysql_error());
		
		if($result){
			
			echo "200";
		}else{
		
			echo "404";	
		}
        
       
    }

   
    
?>