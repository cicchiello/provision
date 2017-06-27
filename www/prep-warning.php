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
      
      <meta http-equiv="Refresh" content="1; URL=Warning.php?ssid=<?php echo htmlspecialchars($_POST['ssid']);?>&pswd=<?php echo htmlspecialchars($_POST['pswd']);?>">
      
   </head>

   <body>

      <h2>WiFi Station Settings</h2>
      <table border="0">
         <tr>
	    <td><b>SSID:</b></td>
	    <td>
	       <input type="text" name="ssid" disabled="disabled"
                   value="<?php echo htmlspecialchars($_POST['ssid']);?>"
		   size="20">
            </td>
	 </tr>
	 <tr>
	    <td><b>Password:</b></td>
	    <td>
	       <input type="text" name="pswd" disabled="disabled"
                   value="<?php echo htmlspecialchars($_POST['pswd']);?>"
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
	 $ssid = escapeshellarg($_POST['ssid']);
	 $pswd = escapeshellarg($_POST['pswd']);
	 $pid = exec("sudo /home/pi/provision/bin/prep-pages.bsh $ssid $pswd");
	 ?>
      
   </body>
</html>
