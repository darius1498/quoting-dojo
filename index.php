<?php 
	session_start();
	require_once("new-connection.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Quoting Dojo</title>
		<link rel="stylesheet" type="text/css" href="quote.css">
	</head>
	<body>
		<h1>Welcome to the QuotingDojo</h1>
		<div class="center">	
			
<?php  
			if (isset($_SESSION['error'])) {
			echo "<p class='error'>".$_SESSION['error']."</p>";
			}
?>
			
		</div>
		<form action="process.php" method="post">
			<span>	
				<label for="name">Your name</label>
				<input type="text" name="name">
			</span>
			<span>	
				<label for="quote">Your quoute</label>
				<textarea name="quote" rows="4" cols="50"></textarea>
			</span>
			<span class="buttons">	
				<input type="submit" value="Add my quote!">
				<a href="main.php" onclick="<?php unset($_SESSION['error']); ?>">Skip to quotes!</a>
			</span>
		</form>

	</body>
</html>