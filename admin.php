<?php
include "jwt.php";

$flagVisible = false;

if(isset($_COOKIE["token"])){
    if(is_admin($_COOKIE["token"])){
        $flagVisible = true;
    }
}
?>

<link rel="stylesheet" href="style.css">
<div class="container">
<h2>Admin Panel</h2>

<?php if($flagVisible): ?>
<div class="flag">
FLAG{JWT_WEAK_SECRET_ADMIN_ACCESS_hacksudo.com}
</div>
<?php else: ?>
<p style="color:red;">Access Denied – Admin Only</p>
<?php endif; ?>

<a href="logout.php"><button>Logout</button></a>
</div>
