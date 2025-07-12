<?php 
require'connection.php';
require'head.php';
require'navbar.php';
?>

<div class="container">
    <div class="row">
        <div class="col-6 offset-3">
            <form action="login.php" method="post">
                <input type="email" name="email" placeholder="email" class="form-control"> <br>
                <input type="password" name="password" placeholder="password" class="form-control"> <br>
                <button type="submit" class="btn btn-primary form-control">Login</button><br>
            </form>
        </div>
    </div>
</div>
<?php require'footer.php'; ?>