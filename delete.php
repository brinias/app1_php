<?php
if(isset($_POST['delete_file']))
{
 $filename = $_POST['file_name'];
 unlink($filename);
 

 
}
?>
 <html>
<head>
  <meta http-equiv='refresh' content='0; URL=index.php'>
</head></html>