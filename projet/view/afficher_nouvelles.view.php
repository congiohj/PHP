<html>
<head>
<title>Nouvelles</title>
<meta charset="UTF-8"/>
<meta http-equiv="content-type" content="text/html;" />
<meta name="author" content="REYMANN-CONGIO" />
<link rel="stylesheet" type="text/css" href="../view/design/style.css"
</head>


<body>
<header>
<h1>Nouvelles </h1>
</header>

<?php
    foreach($table as $a)
	{
		$p = $a->getTitre();
		print '<p>'.$p.'<p>';
		echo '<a href= ../controler/afficher_nouvelle
	}
?>

<footer>
</footer>
</body>
</html>
