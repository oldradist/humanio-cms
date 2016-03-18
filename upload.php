<?php

$authorShort = "ame";
$authorLong = "Alex Meerzon";
$authorFTP = "u62117962-human-text";

$server = "wahre.info";
?>

<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>

<table align=center>
<tr>
<td colspan=3>
<h3>Upload von Texten</h3>
<br>
<?php

if(isset($_POST['pwd']))
 	{
		$result = 0;
		
		// $ftp = $_POST['ftp'];					// host name
		$ftp = $server;						// festgebrannt

		// $username = $_POST['username'];			// FTP user name
		$username = $authorFTP;				// festgebrannt
		
		$pwd = $_POST['pwd'];					// FTP password
		$filename = $_FILES['file']['name'];	// file found
		$tmp = $_FILES['file']['tmp_name'];
		
		// $d = $_POST['dest'];						// destination directory
		$d = '/wahre/texte';						// destination directory
			
		$connect = ftp_connect($ftp)or die("Unable to connect to host");
		
		ftp_login($connect,$username,$pwd)or die("Authorization Failed");
		
		echo "Connected!<br/>";			

		$filename = substr($filename, 0, strlen($filename) -4);
		
		if(!$filename)
			{
				echo"Please select a file";
			}
		else
			{
				ftp_put($connect,$d.'/'.$filename."_".date("YmdHis").".txt",$tmp,FTP_ASCII)or die("Unable to upload");
						echo"File successfully uploaded to FTP";
						
				$result = 1;
			}
			
		// Header('Location: '.$_SERVER['PHP_SELF']);	
			
	}
?>

</td>

</tr>

<tr>
<td>
<form action="" method="post" enctype="multipart/form-data">

	<!--
	<input type="text" name="ftp" placeholder="FTP Server" size=40 />
	<br><br>
	<input type="text" name="username" placeholder="Username" size=40 />
	<br><br>
	-->
	
	<input type="file" name="file"  size=40  />
	<br><br>
	<!--
	<input type="text" name="dest" placeholder="Destination"  size=40 />
	<br><br>
	-->
	<input type="password" name="pwd" placeholder="Password" size=41 />
	<br><br>

	<input type="submit" name="upd" id="upd" value="Upload"/>

</form>

</td>

<td>
<h3></h3>
<br>
</td>

<td>

</td>

</tr>

<tr>
<td>
</td>

<td>
<h3></h3>
<br>
</td>

<td>

</td>


</tr>

</table>

<footer></footer>

</body>

</html>