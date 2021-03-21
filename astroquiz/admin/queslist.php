<?php 
    $filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/inc/header.php');
	include_once ($filepath.'/../classes/Exam.php');
	$exm = new Exam();

?>
<?php

if (isset($_GET['delque'])) {
		$quesno = (int)$_GET['delque'];
		$delQue = $exm->delQuestion($quesno);
	}
 ?>

<div class="main">
	<h1 id="admin_h1">Admin Panel - Question List</h1>

	<?php 
		if (isset($delQue)) {
			echo $delQue;
		}
	 ?>

<div class="quelist">
	<table id="qtable">
		
		<tr>
			<th width="5%">No</th>
			<th width="70%">Questions</th>
			<th width="1%">Action</th>
		</tr>

<?php 

$getData = $exm->getQueByOrder();
if ($getData) {
	$i = 0;
	while ($result = $getData->fetch_assoc()) {
		$i++;

 ?>
		<tr>
			<td><?php echo $i; ?></td>
			<td><?php echo $result['ques']; ?></td>
			<td>
				<a onclick="return confirm('Are You Sure to Remove')" href="?delque=<?php echo $result['quesNo'];?>" class="remove_button">Remove</a>
			</td>

		</tr>

	<?php  }} ?>

	</table>

</div>

	
</div>
<?php include 'inc/footer.php'; ?>