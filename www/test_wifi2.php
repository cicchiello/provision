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
      
      <?php
	 $result = exec("cat /tmp/connected");
	 $ssid = htmlspecialchars($_GET["ssid"]);
	 $pass = htmlspecialchars($_GET["pass"]);
	 $timeout = htmlspecialchars($_GET["timeout"]);
	 $timeout -= 1;
	 if ($timeout == 0) {
            echo '<meta http-equiv="Refresh" content="2; URL=timeout.php?' . 
               'ssid=' . $ssid . '&pass=' . $pass . '">';
	 } else {
	    if ("not tested yet" == $result) {
               echo '<meta http-equiv="Refresh" content="2; URL=test_wifi2.php?' . 
                  'ssid=' . $ssid . '&pass=' . $pass . '&timeout=' . $timeout . '">';
	    } else {
               echo '<meta http-equiv="Refresh" content="2; URL=test_wifi3.php?' .
		  'ssid=' . $ssid . '&pass=' . $pass . '&timeout=' . $timeout . '">';
	    }
	 }
	 ?>
      
   </head>

   <body>

      <h2>WiFi Station Settings</h2>
      <table border="0">
         <tr>
	    <td><b>SSID:</b></td>
	    <td>
	       <input type="text" name="ssid" 
                   value="<?php echo htmlspecialchars($_GET["ssid"]);?>"
		   size="20">
            </td>
	 </tr>
	 <tr>
	    <td><b>Password:</b></td>
	    <td>
	       <input type="text" name="pass" 
                   value="<?php echo htmlspecialchars($_GET["pass"]);?>"
		   size="30">
	    </td>
	 </tr>
	 <tr>
	    <td><b>Status:</b></td>
	    <td>Testing...</td>
	 </tr>
      </table>

      <div class="loader"></div>

   </body>
</html>
