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
      
      <meta http-equiv="Refresh" content="2; URL=test_wifi2.php?ssid=<?php echo htmlspecialchars($_POST["ssid"]);?>&pass=<?php echo htmlspecialchars($_POST["pass"]);?>&timeout=10">
      
   </head>

   <body>

      <h2>WiFi Station Settings</h2>
      <table border="0">
         <tr>
	    <td><b>SSID:</b></td>
	    <td>
	       <input type="text" name="ssid" disabled="disabled"
                   value="<?php echo htmlspecialchars($_POST["ssid"]);?>"
		   size="20">
            </td>
	 </tr>
	 <tr>
	    <td><b>Password:</b></td>
	    <td>
	       <input type="text" name="pass" disabled="disabled"
                   value="<?php echo htmlspecialchars($_POST["pass"]);?>"
		   size="30">
	    </td>
	 </tr>
	 <tr>
	    <td><b>Status:</b></td>
	    <td>Testing...</td>
	 </tr>
      </table>

      <div class="loader"></div>

      <?php
	 $ssid = escapeshellarg($_POST["ssid"]);
	 $pass = escapeshellarg($_POST["pass"]);
	 exec("echo 'not tested yet' > /tmp/connected");
	 exec("chmod a+w /tmp/connected");
	 exec("chmod a+r /tmp/connected");
	 $pid = exec("nohup /home/pi/provision/bin/test_wifi.bsh $ssid $pass > /tmp/wifi_test.log 2>&1 & echo $!");
	 ?>
      
   </body>
</html>
