<?php include('php_imports/header.html'); ?>
<title>Matthew Panebianco</title>
<style>
	label{display: inline-block;width: 100px;vertical-align: middle;}
	form div{
		margin-top: 10px;
		margin-bottom: 20px;
	}
	input{
		border-radius: 4px;
		border: 1px black solid;
		line-height: 24px;
		font-size: 18px;
		vertical-align: middle;
	}
	input[type="submit"]:hover{
		cursor:hand;
		color: #FCB514;
		background-color: black;
	}
	textarea{
		min-width: 300px;
		min-height: 100px;
		border-radius: 4px;
		border: 1px black solid;
		line-height: 24px;
		font-size: 18px;
		vertical-align: middle;
	}
</style>
</head>
<body>
	<?php include('php_imports/nav.html'); ?>
	<div class="content">
		<div class="div_copy">
			<h1>Contact Us</h1>
			<h2>Contact us for questions, tidbits, or anything interesting you've found about goaltending</h2>
			<br />
			<form action="formhandler.php" method="POST">
				<div><label>First Name</label><input name="firstName" type="text"/></div>
				<div><label>Last Name</label><input  name="lastName"  type="text"/></div>
				<div><label>Email</label><input name="email"  type="email"/></div>
				<div><label>Comment</label><textarea  name="comment" ></textarea></div>
				<div><input type="submit" value="Submit"></div>
			</form>
			<?php echo "Last modified: ".date("F d Y H:i:s.",filemtime("contact.php")); ?>
		</div>
		
	</div>
	
</body>
</html>