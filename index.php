<?php
include "jwt.php";

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $user = $_POST["user"];

    // Everyone logs in as normal user
    $token = create_jwt($user, "user");

    setcookie("token", $token, time()+3600, "/");
    header("Location: dashboard.php");
    exit;
}
?>

<link rel="stylesheet" href="style.css">
<div class="container">
<h2>JWT LAB LOGIN</h2>
<form method="POST">
<input name="user" placeholder="Username">
<button>LOGIN</button>
</form>
</div>
