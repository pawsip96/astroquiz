<?php include 'inc/header.php'; ?>
<?php
Session::checkSession();
$total = $exm->getTotalRows();


 ?>
<div class="left_viewans">
<h1>All Question & Ans:<?php echo $total; ?></h1>
	<div class="viewans">
		<table> 
			<?php 
			$getQues = $exm->getQueByOrder();
			if ($getQues) {
				while ($question = $getQues->fetch_assoc()) {
			

			 ?>
			<tr>
				<td colspan="2">
				 <h3>Que <?php echo $question['quesNo']; ?>: <?php echo $question['ques']; ?></h3>
				</td>
			</tr>

			<?php 
				$number = $question['quesNo'];
				$answer = $exm->getAnswer($number);
				if ($answer) {
					while ($result = $answer->fetch_assoc()) {
				
			 ?>

			<tr>
				<td>
				 <?php 
				 if ($result['rightAns'] == '1') {
				 	echo "<span style='color:blue'>".$result['ans']."</span>"; 
				 }else{
				 echo $result['ans'];
				}
				 ?>
				</td>
			</tr>
		<?php }} ?>
		<?php }} ?>

			
		</table><br><br>
		<a href="starttest.php" class="nxt_que">Start Again</a>
</div>
 </div>
<?php include 'inc/footer.php'; ?>