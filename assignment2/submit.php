<!DOCTYPE html>
<html>
<head>
<title>Yuet Form</title>
<meta charset="UTF-8">
</head>
<body>

<h1>You submit this form <?=$hello['counter'] ?> times</h1>
<br><div>Name: <?=$hello['name']?></div>
<br><p>Comment: <?=$hello['comment']?></p>

<form action="main" method="post">
	<input type="submit" value="Go Back">
</form>




</body>




</html>
