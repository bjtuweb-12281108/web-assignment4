<html>
<head>
<title>登录界面</title>
<link href="CSS/1.css"rel="stylesheet"type="text/css">
<style type="text/css">
<!--
.STYLE1{color:#FFFFFF}
body{background-image:url(image/web7.gif);}
.STYLE1 .s1 {
	font-family: Palatino Linotype, Book Antiqua, Palatino, serif;
}
.STYLE1 .s1 {
	font-family: Tahoma, Geneva, sans-serif;
}
.STYLE1 .s1 strong font {
	font-family: Lucida Sans Unicode, Lucida Grande, sans-serif;
}
-->
</style>
</head>
<body>
<p>
</p>
<p align="center">&nbsp;</p>
<p align ="center"class="STYLE1"><span><img src="image/web2.png"_width="140"height="119"align="absmiddle">
</span>
<span class="s1"><strong><font size="30" font color="#FF0000">FIND SOMEONE</font></strong></span></p>
<p align="center"><font color="#FF0000" size="+3"><span class="s6">欢迎进入！</span></font></p>
<form name="Login" method="post">
<div align="center"><center>
<p align="center"><span class="s7"><font color="#FFFFFF">账号：</font>
<input name="uid"type="text"class="STYLE5"id="UID"size="15">
<br>
<br>
<font color="#FFFFFF">昵称：</font>
<input name="name"type="text"class="STYLE5"size="15">
<br>
<br>
<font color="#FFFFFF">密码：</font>
<input name="password"type="password"class="STYLE5"size="15">
</span>
</p>
<div align="center">
<input name="Submit" type="button"class="s8"value="登录" onClick="location='login.php'">
<span class="STYLE1">   </span>
<input name="zhuce"type="button"class="s8" value="注册" onClick="location='zhuce.php'">
</div>
</center>
</div>
</form>
</body>
</html>