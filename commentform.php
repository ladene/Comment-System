<html>
<title>Movie Comment Form</title>
<link href='http://fonts.googleapis.com/css?family=Noticia%20Text' rel='stylesheet' type='text/css'>
<style type = 'text/css'>
form{ font-family: 'Noticia Text', arial, serif; }
p{ font-family: 'Noticia Text', arial, serif; }
body {background-color:F3F1E5;}
</style>
<body>
<img src = ccc.jpg height=40><p>Welcome To the<a href="https://www.facebook.com/rhs.cinema">  Cinema Critique club</a> Movie Commentary Desktop Web Interface</p>
  <form action="commentsWrite.php" method="post">
	<strong>Movie Commentary Form </strong><br>UserName: <input type="text" name="username"/>
	<br>Comment: <br> <TEXTAREA NAME="Comment" COLS=40 ROWS=6></TEXTAREA> <input type="submit"/>
</form>    
</body>
</html>