<?php
	//require_once("../model/DAO.class.php");
?>
<html>
<head>
	<title>Bricomachin</title>
	<meta charset="UTF-8"/>
	<meta http-equiv="content-type" content="text/html;" />
	<meta name="author" content="Jean-Pierre Chevallet" />
	<link rel="stylesheet" type="text/css" href="../view/design/style.css"
</head>

<body>
	<header>
		<h1>Bricomachin, le bricolage malin </h1>
		<p><img src="../view/design/pub.png"/></p>
	</header>
<?php
		foreach($data as $value)
	{
		echo $value->nom;
		echo "<br/>";
	}

?>
	<img src="../view/design/en-construction.png" />

	<footer>
		</p>Site fictif, issus de données réelles du Web</p>
	</footer>
	</body>
</html>
