<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<div id="chart" style="width:600px;height:300px;"></div>
		<!-- Page Content Here -->
		<!--[if lt IE 9]><script src="js/excanvas.min.js"></script><![endif]-->
		<script src="js/flotr2.min.js"></script>
		<script>
			var goals = [[[],[]]]
			var teams = [
				[0, "Ovechkin"],
				[0, "Anahiem"],
				[0, "Arizona"],
				[0, "Boston"],
				[0, "Buffalo"],
				[0, "Calgary"],
				[0, "Carolina"],
				[0, "Chicago"],
				[0, "Colorado"],
				[0, "Columbus"],
				[0, "Dallas"],
				[0, "Detroit"],
				[0, "Edmonton"],
				[0, "Florida"],
				[0, "Los Angeles"],
				[0, "Minnesota"],
				[0, "Ovechkin"],
				[0, "Ovechkin"],
				[0, "Ovechkin"],
				[0, "Ovechkin"],
			]
			window.onload = function(){
				Flotr.draw(
					document.getElementById("chart"),
					wins,
					{
						bars:{
							show: true;
						}	
					}
				);
			};
		</script>
	</body>
</html>