<?php include 'inc/header.php'; ?>
<?php
Session::checkSession();
$question = $exm->getQuestion();
$total = $exm->getTotalRows();
?>
<div class="left_test">
<h1>Welcome to Astro Quiz</h1>
	<div class="starttest">
		<h2>Test your knowledge</h2>
		<p>This is single choice quiz to test your knowledge of astronomy</p>

		<ul>
			<li><strong>Number of Questions:</strong> <?php echo $total; ?></li>
			<li><strong>Question Type:</strong> Single Choice</li>
		</ul>
        <br><br>
		<a class="nxt_que" href="test.php?q=<?php echo $question['quesNo']; ?>">Start Test</a>

	</div>
  </div>
<div class="right_test"></div>
<?php include 'inc/footer.php'; ?>