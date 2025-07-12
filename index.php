<?php 
session_start();
require'connection.php';
require'head.php';
require'navbar.php';
?>

<div class="container">
    <div class="row">
        <div class="col-6 offset-3">
            <?php 
            if(isset($_SESSION['id'])){
              echo "<h1> Welcome to our APP</h1>";
            }else {
              echo "<h1>Login or Register</h1>";
            }
             ?>
        </div>
    </div>
</div>
<?php require'footer.php'; ?>

