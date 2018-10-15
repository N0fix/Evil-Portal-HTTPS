<?php
	$destination = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['HTTP_URI'] . "";
	require_once('helper.php');
?>

<!-- The main page template --><html>

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Portal</title>
<!-- Internal resources --><!-- Javascript resources --><!-- JQuery api must always be first --><script type="text/javascript" language="javascript" src="resources/_javascript/jquery-1.5.2.min.js"></script><script type="text/javascript" language="javascript" src="resources/_javascript/jquery.sprintf.js"></script><script type="text/javascript" language="javascript" src="portal.js"></script><!-- CSS --><link type="text/css" rel="stylesheet" href="resources/_css/portal_global.css">
<!-- External resources --><script type="text/javascript" language="javascript" src="../../javascript/jquery.portal_api.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

</head>

<body>
		<!-- Body content -->
	<div id="container">
	<!-- Will receive Header, Body, Footer and custom blocks ... -->
<div id="header">
	<!-- The header template -->
	<!-- Will be added on top of the page -->
	&nbsp;
</div>
<div id="bann" ></div>
<div id="corpus">
	<div id="body">
		<div>&nbsp;</div>
		<!-- The body background template -->
		<!-- Will be added on the center of the page -->

<div>
	<div id="reserved_block" >
		<!-- The Reserved Block -->
	<div id="error_info_block">
	<!-- Error Info Block -->
	<span id="error_info_value">&nbsp;</span>
</div>



<div class="alert ok">Connexion réussie.</div>
<div class="alert warn"><br> Le site est en maintenance. Vous pouvez désormais accéder à Internet en cliquant <a href="https://www.google.fr">ici</a>.</div>




</div>
</div>

</body>

</html>
