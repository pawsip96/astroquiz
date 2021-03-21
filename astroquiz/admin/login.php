<?php 
    $filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/inc/loginheader.php');
	include_once ($filepath.'/../classes/Admin.php');
	$ad = new Admin();
?>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$adminData = $ad->getAdminData($_POST);
}

  ?>
<div class="main">
    <div id="space"></div>
    <div class="adminlogin">
        <form action="" method="post">
            <h1 class="log_welcome">WELCOME</h1>
            <table class="tbl_welcome">
                <tr>
                    <td><input type="text" name="adminUser" id="adminuser" placeholder="Username" class="form-field"/></td>
                </tr>
                <tr>
                    <td><input type="password" name="adminPass" placeholder="Password" class="form-field"/></td>
                </tr>
                <tr>
                    <td><input type="submit" name="login" value="Login" id="loginsubmit2"/></td>
                </tr>

                <tr>
                    <td colspan="2">
                        <?php
                        if (isset($adminData)) {
                            echo $adminData;
                        }
                         ?>
                    </td>
                </tr>
            </table>
        </form>
</div>
</div>
<?php include 'inc/footer.php'; ?>