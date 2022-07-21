<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
     <title>學生成績系統</title>
	<link rel="stylesheet" href="assets/css/login.css">   

  </head>
  <body>



  <?php
									ini_set('display_errors','off'); 
		header("Content-Type:text/html;charset = big5");
		
		?>
  <form class="box" action="newscore.php" method="post">
  <h1>新增成績</h1>
  <input type="text" name="name" placeholder="name"/>
  <input type="text" name="id" placeholder="id"/>
  <input type="text" name="chinese" placeholder="chinese"/>
  <input type="text" name="english" placeholder="english"/>
  <input type="text" name="math" placeholder="math"/>
  <input type="submit"  value="送出"/>

</form>
</body>	
</html>

<?php

$db_location = "127.0.0.1";
$db_id = "root";
$db_pwd = "123";
$db = "test";
$db_link = mysqli_connect($db_location,$db_id,$db_pwd);
$select_db = mysqli_select_db($db_link,$db);





if($_POST["name"] != "" && $_POST["id"] != "" && $_POST["chinese"] != "" && $_POST["english"] != "" && $_POST["math"]!= "" )
{



    
  $sql3 ="INSERT INTO `score` VALUES ('$_POST[name]',$_POST[id],'$_POST[chinese]','$_POST[english]','$_POST[math]')";
  mysqli_query($db_link,$sql3);
echo "<script>alert('新增成功');location.href = 'teachercenter.php';</script>";
}
  mysqli_close($db_link);
?>