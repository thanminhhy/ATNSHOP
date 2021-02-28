<?php
    include_once 'header.php';
?>
		<section class="login-form">
        <h2 style="margin-left: 30px;">Log In</h2>
        <div class="container">
            <div class="login-form">
                <form action="login.inc.php" method="POST">
                    <input type="text" name="uid" placeholder="UserName...">
                    <input type="password" name="pwd" placeholder="PassWord...">
                    <button type="submit" name="submit">Login</button>
                </form>
            </div>
        </div>
        </section>
<?php
    include_once 'footer.php';
?>
