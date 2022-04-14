<?php 

$kodikos= $_POST['kodikos'];
$uid= $_POST['listRef'];
$url="https://viewer.brinias.eu/firebase/users/";
$url2= $url.$uid;

if ($kodikos=="kostas128") {
$newfile1="/var/www/html/firebase/users/".$uid."/index.php";
$newfile2="/var/www/html/firebase/users/".$uid."/delete.php";
$path="/var/www/html/firebase/users/".$uid;
$file1="/var/www/index.php";
$file2="/var/www/delete.php";

if (!file_exists($path)) {
    mkdir($path, 0777, true);
}



copy($file1, $newfile1);
copy($file2, $newfile2);




//echo "<html><head>
//  <meta http-equiv='refresh' content='0; URL='".$url2."'>
//</head></html>";


//echo $url2;



 
}

else
{
	echo "wrong password";
}
 
 
 ?>
 
 
 <html>
<head>
  <meta http-equiv='refresh' content='0; URL=<?php echo $url2; ?>'>

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.loader {
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #3498db;
  width: 120px;
  height: 120px;
  -webkit-animation: spin 2s linear infinite; /* Safari */
  animation: spin 2s linear infinite;
}

/* Safari */
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
<div align="center">
<h2>Loading</h2>

<div class="loader"></div>
</div>
</body>
</html>

