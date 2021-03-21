<?php include 'inc/header.php'; ?>
<?php
Session::checkSession();
if (isset($_GET['q'])) {
	$number = (int) $_GET['q'];
}else{
	header("Location:exam.php");
}

$total = $exm->getTotalRows();
$question = $exm->getQuesByNumber($number);
?>

<?php 

	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		$process = $pro->processData($_POST);
	}

 ?>
<div class="left_test">
    <h1>Question <?php echo $question['quesNo']; ?> of <?php echo $total; ?></h1>
	<div class="test">
		<form method="post" action="">

            <h3><?php echo $question['ques']; ?></h3>

            <div>
			<?php 

				$answer = $exm->getAnswer($number);
				if ($answer) {
					while ($result = $answer->fetch_assoc()) {
				
			 ?>

			<label class="answear" for="ans<?php echo $result['id']; ?>"><?php echo $result['ans']; ?>
                <input type="radio" name="ans" checked="checked" value="<?php echo $result['id']; ?>" id="ans<?php echo $result['id']; ?>"/>
                <span class="checkmark"></span>
			</label>
		<?php }} ?>

            </div>
        <table>
			<tr>
			  <td>
				<input type="submit" name="submit" value="Next Question" class="nxt_que"/>
				<input type="hidden" name="number" value="<?php echo $number; ?>" />
			</td>
			</tr>
			
		</table>
	    </form>
    </div>
</div>
<div class="right_test"></div>
<?php include 'inc/footer.php'; ?>