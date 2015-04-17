<?php
	header("Content-Type: text/html; charset=utf-8");
	session_start();
	$mysqli = new mysqli('localhost', 'root', '52730576ghq', 'exam_helper');
	$sql = "SELECT school,faculty,major FROM users WHERE username=\"" . $_POST['username'] . "\" and password=\"" . $_POST['password'] . "\"";
	$mysqli->query("SET NAMES utf8");
	$result = $mysqli->query($sql);
	if ($result->num_rows>0) {
		$_SESSION['logined']=1;
		$_SESSION['username']=$_POST['username'];
		$row=$result->fetch_row();
		$_SESSION['school']=$row[0];
		$_SESSION['faculty']=$row[1];
		$_SESSION['major']=$row[2];
		echo "<script language=javascript>alert('登陆成功');location='user.php';</script>";
	} else {
		echo "<script language=javascript>alert('用户名密码错误');history.back();</script>"; 
	}
	mysqli_free_result($result);
	$mysqli->close();
?>