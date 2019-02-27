<?php
require_once 'library/config.php';
require_once 'library/functions.php';
error_reporting(0);
$errorMessage = '&nbsp;';

if (isset($_POST['txtUserName'])) {
	$result = doLogin();
	
	if ($result != '') {
		$errorMessage = $result;
	}
}

?>
<html>
<head>
<title>Asset Management System - Login</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="<?php echo WEB_ROOT;?>css/screen.css" rel="stylesheet" type="text/css">
<link href="<?php echo WEB_ROOT;?>css/menu.css" rel="stylesheet" type="text/css">

<link href="<?php echo WEB_ROOT;?>include/style.css" rel="stylesheet" type="text/css">
<style>
body{ margin-top:20px; background-color:#EEEEEE;}
a {text-decoration:none;}
</style>
</head>

<body>
<div class="container" style="border: 1px solid #999999;">

<div class="span-24">
<img src="http://roayamas.com/asset/admin/images/logo_big.png" width="750"/>
</div>
<div class="span-6">&nbsp;</div>
<div class="span-12" style="margin:50px 0px;">
<table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td>
	<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRDHJQKQQHz5JJE174peYDFkotCMAUC543EM_QX9Hn6vsO-Va53NA" />	</td>
    <td>
	<h2 style="font-size:22px;"><strong>User Login</strong></h2>
		<form method="post" name="frmLogin" id="frmLogin">
		 <div class="errorMessage" align="center"><?php echo $errorMessage; ?></div>
         <strong>Name : </strong><input name="txtUserName" type="text" id="txtUserName"  size="25" maxlength="30"><br/></br>
         <strong>Password : </strong><input name="txtPassword" type="password"  id="txtPassword"  size="25"><br/>
         <br/>  <input name="btnLogin" type="submit" id="btnLogin" value="Login" class="button">

      </form>

	</td>
  </tr>
</table>

</body>
</html>
