<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" ></meta>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
		<title>自我介紹</title>
		<link rel="stylesheet" href="condition_style.css">
	</head>
	<body bgcolor="#00DDDF">
		<input type="checkbox" name="" id="menu_control">
		<div id="wrapper">
			<nav>
				<ol>
					<li><a href="introself_brief.php" class="item-introself">自我介紹</a></li>
					<li><a href="introself_topic.php" class="item">專題</a></li>
					<?php
					session_start();
					if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == true){
					$id = $_SESSION["id"];
						echo "<li><b class='item'>你好" .$id. "</b></li>";
						echo "<li><a href='logout.php' class='item'>登出</a></li>";
					}
					else{
						echo "<li><a href='introself_register.php' class='item'>註冊</a></li>";
						echo "<li><a href='introself_login.php' class='item'>登入</a></li>";
					}
					?>
				</ol>
			</nav>
			<label for= "menu_control" class="menu_button">
					<span>選單</span>
			</label>
		</div>
		<div id="introself_ALL">
			<div id="introself_title">
				<h2>求職條件</h2>
			</div>
			<div id="introself_down">			
				<div id="introself_left">
					<ol>
						<li>
							<details open>
								<summary >
									自我介紹
								</summary>
								<ol>
									<li><a href="introself_brief.php" class="introself">自我簡介</a></li>
									<li><a href="introself_condition.php" aria-current="page" class="introself-condition">求職條件</a></li>
									<li><a href="introself_biography.php" class="introself">自傳</a></li>
									<li><a href="introself_skill.php" class="introself">專長</a></li>
									<li><a href="introself_license.php" class="introself">證照</a></li>
								</ol>
							</details>
						</li>
					</ol>
				</div>
				<div id="introself_right">
					<p>希望性質: 全職工作<br>
					   希望地點: 新北市 台北市<br>
					   希望職稱: 軟體設計工程師<br>
					   上班時段: 日班、可配合輪班</p>
				</div>
			</div>	
		</div>
	</body>
</html>
