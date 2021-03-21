<?php include 'inc/header.php'; ?>
<?php
Session::checkLogin();
?>
<div class="container">
    <div class="left">
        <div class="header">
            <h2 class="animation a1">Welcome astronaut</h2>
            <h4 class="animation a2">Log in to take an astronomy quiz</h4>
        </div>
        <div class="form">
            <form action="" method="post">
                <input type="email" class="form-field animation a3" placeholder="E-mail adress" id="email">
                <br>
                <input type="password" class="form-field animation a4" placeholder="Password" id="password">
                <p class="animation a5"><a href="register.php" id="register">Register</a></p>
                <button class="animation a6" id="loginsubmit">LOGIN</button>
            </form>
        </div>
        <div style="margin-top: 20px;">
            <span class="empty" style="display: none; color: crimson">Login and Password is required!</span>
            <span class="error" style="display: none; color: crimson">Email or Password not matched !</span>
        </div>
    </div>
    <div class="right"></div>
</div>


<?php include 'inc/footer.php'; ?>
