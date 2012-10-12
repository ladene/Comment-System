
<html>
<head>
<link href='http://fonts.googleapis.com/css?family=Noticia%20Text' rel='stylesheet' type='text/css'>
<style type = 'text/css'>
form{ font-family: 'Noticia Text', arial, serif; }
p{ font-family: 'Noticia Text', arial, serif; }
body {background-color:F3F1E5;}
</style>
<script type="text/JavaScript">
<!--
function timedRefresh(timeoutPeriod) {
	setTimeout("location.reload(true);",timeoutPeriod);
}
//   -->
</script>

</head>
<body onload="JavaScript:timedRefresh(5000);">
<h1>Cinema Critique Club Live Comment Feed</h1>
<p>*Comments Refresh every 10 Seconds</p>
<?php
//This is An AutoUpdating Web Script
$myFile = "comments.txt";
$fh = fopen($myFile, 'r');
$theData = fread($fh, filesize($myFile));
fclose($fh);
$DATR=explode(";", $theData);
foreach ($DATR as &$print) {
    echo $print."</br>";
}
?>
</body>
</html>

