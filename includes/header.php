<?php
session_start();
if (!isset($_SESSION['email']))
    header('location:signin.php');
?>

<span class="logo">
    <img src="/assets/images/prabhat-electronics.jpg" alt="">
    <h2>Prabhat Electronics</h2>
</span>
<nav>
    <a href="index.php">Home</a>
    <a href="#">About</a>
    <a href="#">Sales</a>
    <a href="service.php">Service</a>
    <a href="purchase.php">Purchase</a>
    <a href="" style="float:right"><?php
                echo $_SESSION['email'];
                ?></a>
</nav>