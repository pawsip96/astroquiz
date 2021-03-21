<?php include 'inc/header.php'; ?>

	<div class="left_test">
        <h1>Astro Quiz - User Registration</h1>
        <form action="" method="post">
		    <input type="text" name="name" id="name" class="form-field" placeholder="Name"></td>
            <br>
            <input name="username" type="text" id="username" class="form-field" placeholder="Username"></td>
            <br>
            <input type="password" name="password" id="password" class="form-field" placeholder="Password"></td>
            <br>
            <input name="email" type="text" id="email" class="form-field" placeholder="E-mail"></td>
            <br><br>
            <input type="submit" id="regsubmit" value="Signup" class="nxt_que">
        </form>
	   <p>Already Registered ? <a href="index.php">Login</a> Here</p>
     
     <span id="state"></span>
	</div>
    <div class="right_test"></div>

<?php include 'inc/footer.php'; ?>