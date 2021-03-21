<?php include 'inc/header.php'; ?>
<?php
Session::checkSession();
?>
<div class="left_test">
<h1>You are done!</h1>

<div class="starttest">
	<p>Congrats! You have just competed the test.</p>
	<p>Final Score: 

		<?php 
		if (isset($_SESSION['score'])) {
			echo $_SESSION['score'];
			unset($_SESSION['score']);
		}
		 ?>

	</p>
    <br><br>
	<a href="viewans.php" class="nxt_que">View Ans</a>
	<a href="starttest.php" class="nxt_que">Start Again</a>
</div>
	
  </div>
<div class="right_test"></div>
<?php include 'inc/footer.php'; ?>