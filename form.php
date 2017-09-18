<?php
if(isset($_POST['submit_msg'])) 
{
   if (empty($_POST['name_msg'])){ 
      die('<p><p><center><font face="Tahoma" color="#003399" style="font-size: 9pt"><h1><i>Error!</i></h1><font color="#ff0000"> <br>caution : please type your name in form</font><br><br><a href  ONCLICK="window.history.go(-1);">Back to form</a><center></font>'); 
   }; 
  if (empty($_POST['email_msg'])){ 
      die('<p><p><center><font face="Tahoma" color="#003399" style="font-size: 9pt"><h1><i>Error!</i></h1><font color="#ff0000"> <br>caution : please type your email</font><br><br><a href  ONCLICK="window.history.go(-1);">Back to form</a><center></font>'); 
   }; 
   if (empty($_POST['msg_body'])){ 
      die('<p><p><center><font face="Tahoma" color="#003399" style="font-size: 9pt"><h1><i>Error!</i></h1><font color="#ff0000"> <br>caution : please type your text</font><br><br><a href  ONCLICK="window.history.go(-1);">Back to form</a><center></font>'); 
   }; 
   if(!strpos($_POST['email_msg'],"@")) 
   { 
      print('<p><p><center><font face="Tahoma" color="#003399" style="font-size: 9pt"><h1><i>Error!</i></h1><font color="#ff0000"> <br>caution : type your Emali correctly</font><br><br><center><font face="Tahoma" style="font-size: 9pt">example : info@phpfreecode.Com </center></font><br><a href ONCLICK="window.history.go(-1);">Back to form</a><center></font>'); 
      die(''); 
   }; 

   $name_msg = htmlspecialchars($_POST['name_msg']); 
   $msg_body = htmlspecialchars($_POST['msg_body']); 
   $url_msg=$_POST['url_msg'];
   $from  = htmlspecialchars($_POST['email_msg']); 
   
   $con=mysqli_connect("localhost", "root", "") or die (mysql_error ());
   $db=mysqli_select_db($con,"levoyage") or die(mysql_error());
   $sql="insert into user values('".$name_msg."','".$msg_body."','".$url_msg."','".$from."')";
   $con->query($sql);
{ 
   print('<p><p><center><font face="Tahoma" color="#003399" style="font-size: 9pt"><h1><i>Thank You!</i></h1><font color="#ff0000"> <br>Your comment has been sent successfully</font><br>Thanks for your comment<br><br><span style="cursor:hand" ONCLICK="window.history.go(-1);"> return to comment  </span>| <center></font>'); 
} 

}
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="mystyles.css">
<style type="text/css">
.style1 {
	text-align: center;
}
.style2 {
	font-size: 40pt;
	color: #0000FF;
	font-family: "Times New Roman", Times, serif;
}
.style3 {
	font-size: medium;
	color: #0000FF;
	font-family: "Times New Roman", Times, serif;
}
.style5 {
	font-family: "Times New Roman", Times, serif;
	border-right-style: solid;
	border-right-width: 0px;
	border-top-style: solid;
	border-top-width: 0px;
	background-color: #CCFFFF;
}
.style6 {
	text-align: center;
	border-left-style: solid;
	border-left-width: 0px;
	border-right-style: solid;
	border-right-width: 0px;
	border-top-style: solid;
	border-top-width: 0px;
	background-color: #CCCCFF;
}
.style8 {
	border: 3px dashed #0000CC;
}
.style9 {
	font-family: "Times New Roman", Times, serif;
	border-right-style: solid;
	border-right-width: 0px;
	background-color: #CCFFFF;
}
.style11 {
	font-family: "Times New Roman", Times, serif;
	border-right-style: solid;
	border-right-width: 0px;
	border-bottom-style: solid;
	border-bottom-width: 0px;
}
.style12 {
	font-family: "Times New Roman", Times, serif;
	padding-left: 10px;
	background-color: #CCFFFF;
}
.style13 {
	font-family: "Times New Roman", Times, serif;
	border-right-style: solid;
	border-right-width: 0px;
	background-color: #D5F1FF;
}
.style15 {
	font-family: "Times New Roman", Times, serif;
	border-right-style: solid;
	border-right-width: 0px;
	border-bottom-style: solid;
	border-bottom-width: 0px;
	background-color: #D5F1FF;
}
.style17 {
	font-family: "Times New Roman", Times, serif;
	padding-left: 10px;
	background-color: #D5F1FF;
}
.style18 {
	font-family: "Times New Roman", Times, serif;
	border-left-style: solid;
	border-left-width: 0px;
	padding-left: 10px;
	background-color: #CCFFFF;
	text-align: center;
}
.style19 {
	font-size: xx-small;
}
</style>
</head>
<body>
<table width=100%>
  <tr>
	
	<td align="right">
		<div  > <a href="sign up.html">SIGN IN/SIGN UP</a> 
		follows us:    TWITTER |  FACEBOOK |  INSTAGRAM</div> 
	</td>
  </tr>
</table>
<table cellpadding="30"  width="100%">
<tr class="size"  >
<b><td> <a href="HomePage.html">HOME</a> </td>
   <td> <a href="foodstops.html">FOODSTOPS</a> </td>        
   <td> <a href="testimony.html">TESTIMONY</a>  </td>
   <td> <a href="contact.html"> ABOUT US </a> </td>
   <td> <a href="http://localhost/Levoyage/form.php">WRITE TO US</a>  </td>
   <td> <a href="more.html"> FEELING BORED .??</a> </td>			</b>
</tr>
</table>

<form method="post" action="form.php">
<table align="center" class="style8" style="width: 551">
	<tr>
		<td class="style6" colspan="2" style="height: 136px"><span class="style2">
		<strong class="style11">Contact us</strong></span><br class="style3">
		<span class="style3">Tell us what is in your mind</span></td>
	</tr>
	<tr>
		<td class="style12" style="width: 268px; height: 40; color:blue"><strong>Your Name:</strong></td>
		<td class="style5" style="width: 421px; height: 40;"><span dir="ltr">
		<input name="name_msg" size="33" id="fa" dir="ltr" tabindex="1" maxlength="30"   lang="fa" style="float: left; width: 204px; height: 25px;" value="" onclick="this.value=''"><div class="style1">
		</div>
		</span> </td>
	</tr>
	<tr>
		<td class="style17" style="width: 268px; height: 40; color:blue"><strong>Your Email:</strong></td>
		<td class="style13" style="width: 421px; height: 40;"><span dir="ltr">
		<input name="email_msg" size="33" dir="ltr" tabindex="3" maxlength="30" id="fa1" style="float: left; width:204px; height: 25px;" value="" onclick="this.value=''"></span></td>
	</tr>
	<tr>
		<td class="style12" style="width: 268px; height: 40; color:blue"><strong>Your website:</strong></td>
		<td class="style9" style="width: 421px; height: 40;"><span dir="ltr">
		<input name="url_msg" size="21" dir="ltr" tabindex="2" maxlength="30" id="fa0" style="float: left; width: 204px; height: 25px;" value="" onclick="this.value=''"></span></td>
	</tr>
	<tr>
		<td class="style17" style="width: 268px; height: 123px; color:blue"><strong>Comment:</strong></td>
		<td class="style15" style="width: 421px; height: 123;"><span dir="ltr">
		<textarea rows="6" name="msg_body" dir="ltr" id="fa2" tabindex="4" lang="fa" onclick="this.value=''" style="width: 400px"></textarea></span></td>
	</tr>
	<tr>
		<td class="style18" style="height: 78px;" colspan="2">
<span dir="ltr">
<input type="submit" value="Submit" name="submit_msg" tabindex="5" id="fa3" style="float:center; width: 114px; height: 35px;" ><br></span>
		<br class="style19"><font face="Tahoma"><a target="_blank" ><span style="font-size: 8pt; text-decoration: none"></span></a></font>
</td>
	</tr>
</table>
</form>
</body>
</html>