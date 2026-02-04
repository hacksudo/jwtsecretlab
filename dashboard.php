<?php
if(!isset($_COOKIE["token"])){
    header("Location: index.php");
    exit;
}
?>

<link rel="stylesheet" href="style.css">
<div class="container">
<h2>User Dashboard</h2>

<a href="admin.php"><button>Open Admin Panel</button></a>
<a href="logout.php"><button>Logout</button></a>

</div>
