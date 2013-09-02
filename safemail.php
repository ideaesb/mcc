<?php session_start(); ?>
<?php 
include_once 'secureimage/securimage.php';
$securimage = new Securimage();
$captchaStr = $_POST['captcha_code'];


if ($securimage->check($captchaStr))
{
    // the godaddy gdform code goes here...
    $request_method = $_SERVER["REQUEST_METHOD"];
    if($request_method == "GET"){
      $query_vars = $_GET;
    } elseif ($request_method == "POST"){
      $query_vars = $_POST;
    }
    reset($query_vars);
    $t = date("U");

    $file = $_SERVER['DOCUMENT_ROOT'] . "/../data/gdform_" . $t;
    $fp = fopen($file,"w");
    while (list ($key, $val) = each ($query_vars)) {
     fputs($fp,"<GDFORM_VARIABLE NAME=$key START>\n");
     fputs($fp,"$val\n");
     fputs($fp,"<GDFORM_VARIABLE NAME=$key END>\n");
     if ($key == "redirect") { $landing_page = $val;}
    }
    fclose($fp);
    if ($landing_page != ""){
	header("Location: http://".$_SERVER["HTTP_HOST"]."/$landing_page");
    } else {
	header("Location: http://".$_SERVER["HTTP_HOST"]."/");
    }
}
else
{
   $correctStr = $securimage->getCode(false,false);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!-- DW6 -->
<head>
<!-- Copyright 2005 Macromedia, Inc. All rights reserved. -->
<title>Thank You</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="mm_travel2.css" type="text/css" />
<script language="JavaScript" type="text/javascript">
//--------------- LOCALIZEABLE GLOBALS ---------------
var d=new Date();
var monthname=new Array("January","February","March","April","May","June","July","August","September","October","November","December");
//Ensure correct for language. English is "January 1, 2004"
var TODAY = monthname[d.getMonth()] + " " + d.getDate() + ", " + d.getFullYear();
//---------------   END LOCALIZEABLE   ---------------
</script>
</head>
<body bgcolor="#C0DFFD">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr bgcolor="#3366CC">
    <td width="382" colspan="2" rowspan="2" nowrap="nowrap"><img src="mm_travel_photo.jpg" alt="Header image" width="382" height="127" border="0" /></td>
    <td width="378" height="63" id="logo" valign="bottom" align="center" nowrap="nowrap">MAUI CRICKET CLUB</td>
    <td width="100%">&nbsp;</td>
  </tr>
  <tr bgcolor="#3366CC">
    <td height="64" id="tagline" valign="top" align="center">Baldwin Beach, Paia</td>
	<td width="100%">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="4" bgcolor="#003366"><img src="mm_spacer.gif" alt="" width="1" height="1" border="0" /></td>
  </tr>

  <tr bgcolor="#CCFF99">
  	<td>&nbsp;</td>
  	<td colspan="3" id="dateformat" height="25"><a href="index.html">HOME</a> :: <script language="JavaScript" type="text/javascript">
      document.write(TODAY);	</script>	</td>
  </tr>
 <tr>
    <td colspan="4" bgcolor="#003366"><img src="mm_spacer.gif" alt="" width="1" height="1" border="0" /></td>
  </tr>
 <tr>
    <td width="40">&nbsp;</td>
    <td colspan="2" valign="top">&nbsp;<br />
    &nbsp;<br />
    <table border="0" cellspacing="0" cellpadding="2" width="550">
        <tr>
          <td class="pageName">T H E R E &nbsp;&nbsp;&nbsp; W A S &nbsp;&nbsp;&nbsp;  A N  &nbsp;&nbsp;&nbsp; E R R O R</td>
        </tr>
        <tr>
          <td class="bodyText"><p>Your message will NOT be sent.  Feel free to <a href="javascript:history.go(-1);">try again</a>. 
		</tr>
        <tr>
<?php
   if (is_numeric($correctStr))
   {
?>
      <td class="bodyText"><p>You Entered <a href="http://www.captcha.net/" target="_blank">CAPTCHA</a> answer <strong><?= $captchaStr ?></strong>, the correct answer (a number) was <strong><?= $correctStr ?></strong>.</p></td>
<?php
    }
	else
	{
?>
       <td class="bodyText"><p>You Entered <a href="http://www.captcha.net/" target="_blank">CAPTCHA</a> code <strong><?= $captchaStr ?></strong>, the correct code (CaSe InSeNsItIvE oK) was <strong><?= $correctStr ?></strong>.</p></td>
<?php
     }
?>          
          
		</tr>
        <tr>
          <td align="left"><img src="logo.png" height="200"/></td>
        </tr>
      </table>	  </td>
	<td width="100%">&nbsp;</td>
  </tr>

 <tr>
    <td width="40">&nbsp;</td>
    <td width="342">&nbsp;</td>
    <td width="378">&nbsp;</td>
	<td width="100%">&nbsp;</td>
  </tr>
</table>
</body>
</html>
<?php  
}
?>
