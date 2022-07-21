<!DOCTYPE HTML>
<!--
	Retrospect by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>學生成績系統</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body>

		<!-- Header -->
			<header id="header">
					<h1>成績管理</a></h1>
				
			</header>

		
			

		<!-- Main -->
			
							<hr />
							<table width="250" height = "250" border="1" align="center">
  		<tr>
    		<td align="center">
									<?php
									ini_set('display_errors','off'); 
		header("Content-Type:text/html;charset = big5");
		session_start();
		echo "<p>"."<h2>"."老師您好，今天需要什麼服務呢?"."</h2>";
		?>
      		<p><form  method="post" action="newscore.php">
          		<input type="submit" name="update" value="新增成績"></form>
        		</p>
      		<p><form  method="post" action="update.php">
          		<input type="submit" name="updatepwd" value="修改成績"></form>
        		</p>
      		</form>
    		</td>
  		</tr>
		</table>
	</div>
	<div id="wrapper">
	<div id="featured" class="container">
		<h2 class="title">成績單</h2>
		<?php
header("Content-Type:text/html;charset = big5");


		$db_location = "127.0.0.1";
		$db_id = "root";
		$db_pwd = "123";
		$db = "test";
		$db_link = mysqli_connect($db_location,$db_id,$db_pwd);
		$select_db = mysqli_select_db($db_link,$db);
		$sql7 = "select * from `score`";
		$result7 = $db_link->query($sql7);
        
		echo "<p>";
		echo "<center><table  border=1 width = 1000><tr>";
		echo "<td>"."姓名"."</td>";
		echo "<td>"."學號"."</td>";
		echo "<td>"."國文"."</td>";
		echo "<td>"."英文"."</td>";
		echo "<td>"."數學"."</td>";
		echo "</tr>";

		for($i = 0;$i < mysqli_num_rows($result7);$i++){
				echo "<tr>";
				$row = mysqli_fetch_row($result7);
				
				echo "<td>".$row[0]."</td>";
				echo "<td>".$row[1]."</td>";
				echo "<td>".$row[2]."</td>";
				echo "<td>".$row[3]."</td>";
				echo "<td>".$row[4]."</td>";
				echo "<td>"."<form method = post action = teachercenter.php>"."<input type = submit name = $i value = 刪除>"."</form></td></tr>";

				if(isset($_POST["$i"])){
				$sql8 = "DELETE FROM `score` WHERE `id` ='$row[1]'";
				mysqli_query($db_link,$sql8);

				//$sql9 = "select stock from 產品 where number ='$row[6]'";
				//$result9 = $db_link->query($sql9);
				//$row9 = mysqli_fetch_row($result9);
				//$sql10 = "UPDATE 產品 SET stock='$row9[0]' + '1' where number ='$row[6]'";
				//mysqli_query($db_link,$sql10);
				echo "<script>alert('已刪除');location.href = 'teachercenter.php';</script>";
				}
		}
		echo "</table></p>";
	echo "<p>"."<form method= post action = teachercenter.php>"."<input type = submit name = a value = 刪除全部成績>"."</form>";
	if(isset($_POST["a"]))
		{
			echo "<script>alert('刪除完成');location.href = 'teachercenter.php';</script>";
			$sql11 = "DELETE FROM `score` WHERE 1";
			mysqli_query($db_link,$sql11);
		}
	
?>
				</div>
			</section>

		<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<ul class="icons">
						<li><a href="#" class="icon fa-facebook">
							<span class="label">Facebook</span>
						</a></li>
						<li><a href="#" class="icon fa-twitter">
							<span class="label">Twitter</span>
						</a></li>
						<li><a href="#" class="icon fa-instagram">
							<span class="label">Instagram</span>
						</a></li>
						<li><a href="#" class="icon fa-linkedin">
							<span class="label">LinkedIn</span>
						</a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; Untitled.</li>
						<li>Images: <a href="http://unsplash.com">Unsplash</a>.</li>
						<li>Design: <a href="http://templated.co">TEMPLATED</a>.</li>
					</ul>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>