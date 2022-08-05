<?php

	// List of IPs that have caused issues.
	// For example spammers etc.
	
    $blocked_ips = array('');
    if(in_array($_SERVER['REMOTE_ADDR'], $blocked_ips)){
    	die("<center> <h1> Your IP address has been blocked. </h1>  </center>");
    }

?>
