<html>
<head>
<meta http-equiv="Pragma" content="no-cache">

<style>
.button {
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.button1 {background-color: #4CAF50;} /* Green */
.button2 {background-color: #008CBA;} /* Blue */
</style>


</head>
<body>
<div align="center">
<div id="wrapper">

<div id="file_div">
<?php
$folder = getcwd();

 $excludedExtensions = array (
    'html',
    'htm',
    'php'
  );

  // Make sure we ignore . and ..
  $excludedFiles = array_merge($excludedFiles,array('.','..')); 
 


if ($dir = opendir($folder))
{

while (($file = readdir($dir)) !== false)
 {


 if ($file != "." && $file != ".." 
    && $file != "read.php"
	    && $file != "index.php"

    && $file != "delete.php"
    && $file != ".read.php.swp"
    && substr($file,-strlen(".html")) != ".html" //if you don't want to include .html files, for instance
    && substr($file,-strlen(".js")) != ".js" //if you don't want to include .js files, for instance
    && $file != ""
    ) {$count++;

  echo "<p><a href=".$file.">".$file."</a></p>";
  //echo "<iframe src=".$file." width='10%' height='10%'></iframe>";
  echo "<form method='post' action='delete.php'>";
  echo "<input type='hidden' name='file_name' value='".$file."'>";
  echo "<input type='submit' name='delete_file' value='Delete File'>";
  echo "</form>";
 }
}
 closedir($dir);
}

?>
</div>
</div>
</div>
</body>
</html><html>
<body>
<div id="wrapper">

<div id="file_div">
<?php
$folder = "";

 
 



if ($dir = opendir($folder))
{
 while (($file = readdir($dir)) !== false)
 {
	 
	 
	
	 
	 
	 
  echo "<p>".$file."</p>";
  echo "<form method='post' action='delete.php'>";
  echo "<input type='hidden' name='file_name' value='".$file."'>";
  echo "<input type='submit' name='delete_file' value='Delete File'>";
  echo "</form>";
 }
 closedir($dir);
}
?>

</div>

</div>

<script>
/* If browser back button was used, flush cache */
(function () {
	window.onpageshow = function(event) {
		if (event.persisted) {
			window.location.reload();
		}
	};
})();

</script>
<button class="button button2" onClick="window.location.reload();">Refresh content</button><br>

<button onclick="location.href='https://app1.brinias.eu/upload.html'" class="button button2">Upload new file</button>

</body>
</html>
