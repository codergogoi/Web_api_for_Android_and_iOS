<?php
    
    $getData = false;
    
	
 	$db = mysql_connect('localhost', 'demox', 'demox123') or die('Could not connect: ' . mysql_error());
    mysql_select_db('my_apps') or die('Could not select database');
		
    $query = "SELECT * from app_user ORDER BY sl";
    $result = mysql_query($query) or die('Query failed: ' . mysql_error());
    
    $jsonResponse = array("userlist" => array());
    
    while($row = mysql_fetch_assoc($result))
    {
						  $getData = true;
						  $jsonRow = array(
                                           
                                           "id"=> $row['sl'],
                                           "user"=> $row['user_email'],
                                           "date"=> $row['reg_date']
                                           
                                           
                                           );
						  
						  array_push($jsonResponse["userlist"], $jsonRow);
						  
        
    }
    
    if($getData){
						  
		 echo json_encode($jsonResponse);
						  
    }else{
        
        echo 404;
        
    }
    
     
    
    ?>