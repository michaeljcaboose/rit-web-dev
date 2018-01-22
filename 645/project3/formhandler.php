<?php
	$firstName = $lastName = $email = $comment = '';
	
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$firstName = test_input($_POST['firstName']);
		$lastName = test_input($_POST['lastName']);
		$email = test_input($_POST['email']);
		$comment = test_input($_POST['comment']);
	}
	
	$content = 'First Name: ' . $firstName .'\n'. 'Last Name: ' . $lastName . '\n'. 'Email Address: ' . $email . '\n'. 'Comment: ' . $comment;
				
	$content = wordwrap($content, 70);
	
	mail('mp5292@g.rit.edu', 'Project 3 email', $content);
	
	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}
	
	echo 'Thanks for submitting!\n';
	echo '<a href="https://people.rit.edu/~mp5292/645/project3/">Back to Project 3</a>';
	
	
	?>