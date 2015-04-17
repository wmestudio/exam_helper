<?xml version="1.0" encoding="utf-8" ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1 //EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<title>考试帮</title>
		<link rel="Stylesheet" href="main.css" type="text/css" />
	</head>
	<body>
		<div id="main">
			<table width="100%">
				<tr>
					<td align="left" width="25%">
						<h1>考试帮</h1>
					</td>
					<td width="50%">
						<form action="search.php" method="post">
							<table width="100%">
								<tr>
									<td width="50%">
										<input type="text" size="50" name="search" value="南京大学 计算系统基础 王浩然" onclick="if(value==defaultValue){value='';this.style.color='#000'}" onBlur="if(!value){value=defaultValue;this.style.color='#999'}" style="color:#999" />
									</td>
									<td align="left">
										<input type="submit" name="search" value="搜索"/>
									</td>
								</tr>
							</table>
						</form>
					</td>
					<td align="center" width="25%" style="color:#FFFFFF;border-left:1px solid">
						<?php
							session_start();
							if(isset($_SESSION['logined']) && $_SESSION['logined']){
								echo "<i>欢迎，" . $_SESSION['username'] . "</i>";
							}
						?>
					</td>
				</tr>
			</table>
			<hr/>
			<table width="100%" height="500" border="1" cellspacing="0">
				<tr>
					<td width="70%" valign="top" style="color:#FFFFFF">
						我的收藏：
					</td>
					<td width="30%" align="left" valign="top" style="color:#FFFFFF" rowspan="2">
						<table width="100%">
							<tr>
								<td colspan="2">
									我的信息
								</td>
							</tr>
							<tr height="100">
								<td width="20%" align="left">
									学校：
								</td>
								<td width="80%">
								<?php
									echo $_SESSION['school'];
								?>
								</td>
							</tr>
							<tr height="100">
								<td width="20%" align="left">
									院系：
								</td>
								<td width="80%">
								<?php
									echo $_SESSION['faculty'];
								?>
								</td>
							</tr>
							<tr height="100">
								<td width="20%" align="left">
									专业：
								</td>
								<td width="80%">
								<?php
									echo $_SESSION['major'];
								?>
								</td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<td valign="top" style="color:#FFFFFF">
						我的上传：
					</td>
				</tr>
			</table>
			<hr/>
			<table width="100%" height="100">
				<tr>
					<td align="center" style="color:#FFFFFF">
						Copyright (C) WME, All Rights Reserved
					</td>
				</tr>
				<tr>
					<td align="center">
						<a href="mailto:wmegroup@163.com" style="color:#FFFFFF">联系方式：wmegroup@163.com</a>
					</td>
				</tr>
			</table>
		</div>
	</body>
</html>