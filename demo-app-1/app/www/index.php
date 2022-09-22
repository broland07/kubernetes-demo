<html>
<head>
	<title>Hello world!</title>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
	<style>
	body {
		background-color: white;
		text-align: center;
		padding: 50px;
		font-family: "Gotham Book","Open Sans","Helvetica Neue",Helvetica,Arial,sans-serif;
        color: #707172;
	}

	#logo {
		margin-bottom: 40px;
	}
	</style>
</head>
<body>
	<img id="logo" src="logo.png" weight="100" height="100" />
	<h1><?php echo "Hello  world!"; ?></h1>
	<?php
	$hostname = gethostname();
	echo"My hostname is  $hostname";

	?>
</body>
</html>
