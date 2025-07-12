<?php 

    $db = mysqli_connect('localhost', 'root', '', 'nooneneodb') or die ('Greska konekcije');
    $sql = "SELECT * FROM names";
    $query = mysqli_query($db, $sql);

    $rezultat = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>