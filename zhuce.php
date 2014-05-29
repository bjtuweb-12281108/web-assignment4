<html>

<title>注册界面</title>
<head>
<style type="text/css">
<!--
body{background-image:url(image/web1.gif);}
-->
</style>
</head>
<body>
<p>&nbsp;</p>
<p><span><span><img src="image/web2.png"_width="140"height="119"align="absmiddle">
</span>
<span class="s1"><strong><font size="30" font color="#FF0000">FIND SOMEONE</font></strong></span></p>
<p align="center"><font face="宋体" size="5" color="#990000">
<font color="#FFFFFF" size="6"face="华文彩云">请填写注册信息</font></font></p>
<form action="saveuser.php" method="post" >
<table width="64%" border="1" align="center" cellpadding="0" bordercolor="#FFFFFF">
<tr>
<td width="25%" rowspan="4" class="s8"><div align="center"><font face="宋体" size="5" color="#990000"><strong><img src="image/web4.png" width="100" height="100"></strong></font></div></td>
<td width="18%" class="s8"><div align="left"><font color="#FFFFFF">用户账号：</font></div></td>
<td width="57%">
<input name="uid" class="s8" size="20" type="text">
<span><font color="#FF0000">***</font></span></td>
</tr>
<tr>
<td class="s8"><div align="left"><font color="#FFFFFF">密码：</font></div></td>
<td>
<input name="pwd" type="password" class="s8" size="20">
<span><font color="#FF0000">***</font></span></td>
</tr>
<tr>
<td class="s8"><div align="left"><font color="#FFFFFF">真实姓名：</font></div></td>
<td>
<input name="name1" type="text" class="s8" size="20">
<span><font color="#FF0000">***</font></span></td>
</tr>
<tr>
<td class="s8"><div align="left"><font color="#FFFFFF">昵称：</font></div></td>
<td>
<input name="name2" class="s8" size="20">
<span><font color="#FF0000">***</font></span></td>
</tr>
<tr>
<td rowspan="3" class="s8"><div align="center">
<p align="left" class="s6"><font color="#FFFFFF">提示：</font></p>
<p align="left"class="s6"><font color="#FFFFFF">带<font color="#FF0000">***</font>号不能为空</font></p></div></td>
<td class="s8"><div align="left"><font color="#FFFFFF">性别：</font></div>
<div align="left"></div></td>
<td>
<select name="sex"><option value="男">男</option><option value="女">女</option></select><span><font color="#FF0000">***</font></span></td>
</tr>
<tr>
<td class="s8"><div align="left"><font color="#FFFFFF">学院：</font></div></td>
<td>
<select name="xueyuan"><option value="计算机与信息技术学院">计算机与信息技术学院</option><option value="电气工程学院">电气工程学院</option><option value="电子信息技术学院">电子信息技术学院</option><option value="经济管理学院">经济管理学院</option><option value="交通运输学院">交通运输学院</option><option value="土木建筑工程学院">土木建筑工程学院</option><option value="理学院">理学院</option><option value="机械与电子控制工程学院">机械与电子控制工程学院</option><option value="人文社会科学学院">人文社会科学学院</option><option value="语言与传播学院">语言与传播学院</option><option value="软件学院">软件学院</option><option value="建筑与艺术学院">建筑与艺术学院</option></select><span><font color="#FF0000">***</font></span>
</td>
</tr>
<tr>
<td class="s8"><div align="left"><font color="#FFFFFF">年级：</font></div></td>
<td>
<select name="grade"><option value="大一">大一</option><option value="大二">大二</option><option value="大三">大三</option><option value="大四">大四</option></select>
<span><font color="#FF0000">***</font></span>
</td>
</tr>
<tr class="s8">
<td colspan="3"><div align="center">
<input name="B1" type="submit" class="s8" style="background-color:#cccccc" value="提交">
</div></td>
</tr>
</table>
<p align="center">&nbsp;</p>
</form>
</body>
</html>