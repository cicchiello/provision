<!DOCTYPE html>
<html>
   <head>
      <title>Raspberry Pi 3 Provisioning</title>
      <style>body{font-family: Arial}</style>
   </head>

   <body>
      <form method="post" action="/provision/test_wifi.php">
      <input type="hidden" name="save" value="0">


      <h2>WiFi Station Settings</h2>
      <table border="0">
         <tr>
	    <td><b>SSID:</b></td>
	    <td><input type="text" name="ssid" value="{ssid}" size="20"></td>
	 </tr>
	 <tr>
	    <td><b>Password:</b></td>
	    <td><input type="text" name="pass" value="******" size="30"></td>
	 </tr>
	 <tr>
	    <td><b>Status:</b></td>
	    <td>waiting for input.</td>
	 </tr>
      </table>


      <h2>
	 <input type="submit" value="Test">
      </h2>
	 
   </body>

</html>
