<!DOCTYPE html>
<html>
   <head>
      <title>Raspberry Pi 3 Provisioning</title>
      
      <style>
	 body{font-family: Arial}

	 .loader {
	    border: 8px solid #f3f3f3;
	    border-radius: 50%;
	    border-top: 8px solid #3498db;
	    width: 20px;
	    height: 20px;
	    -webkit-animation: spin 2s linear infinite;
	    animation: spin 2s linear infinite;
	 }

	 @-webkit-keyframes spin {
	    0% { -webkit-transform: rotate(0deg); }
	    100% { -webkit-transform: rotate(360deg); }
	 }

	 @keyframes spin {
	    0% { transform: rotate(0deg); }
	    100% { transform: rotate(360deg); }
	 }
      </style>
      
   </head>

   <body>

      <form method="post" action="/provision/provision.php">
       
      <h2>WiFi Station Settings</h2>
      <table border="0">
         <tr>
	    <td><b>SSID:</b></td>
	    <td>
	       <input type="text" name="ssid" disabled="disabled"
                   value="<?php echo htmlspecialchars($_GET["ssid"]);?>"
		   size="20">
            </td>
	 </tr>
	 <tr>
	    <td><b>Password:</b></td>
	    <td>
	       <input type="text" name="pass" disabled="disabled"
                   value="<?php echo htmlspecialchars($_GET["pass"]);?>"
		   size="30">
	    </td>
	 </tr>
	 <tr>
	    <td><b>Status:</b></td>
	    <?php
	       $result = exec("cat /tmp/connected");
	       echo '<td><mark><b>Error: ' . $result . '</b></mark></td>'
	       ?>
	 </tr>
      </table>

      <h2>
	 <input type="submit" value="Reset">
      </h2>

   </body>
</html>
