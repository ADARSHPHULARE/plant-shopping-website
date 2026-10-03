<?php if(session_status()===PHP_SESSION_NONE) session_start(); ?>
<!doctype html><html lang="en"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1">
<title>GreenNest — Plant Shopping</title><link rel="stylesheet" href="<?= strpos($_SERVER['PHP_SELF'],'/admin/')!==false?'../':''
?>css/style.css"></head><body>
<header class="nav"><a class="logo" href="<?= strpos($_SERVER['PHP_SELF'],'/admin/')!==false?'../':''
?>index.php">🌱 GreenNest</a><nav>
<a href="<?= strpos($_SERVER['PHP_SELF'],'/admin/')!==false?'../':''
?>index.php">Home</a><a href="<?= strpos($_SERVER['PHP_SELF'],'/admin/')!==false?'../':''
?>products.php">Plants</a><a href="<?= strpos($_SERVER['PHP_SELF'],'/admin/')!==false?'../':''
?>about.php">About</a><a href="<?= strpos($_SERVER['PHP_SELF'],'/admin/')!==false?'../':''
?>cart.php">Cart <span id="cartCount">0</span></a><a class="login" href="<?= strpos($_SERVER['PHP_SELF'],'/admin/')!==false?'../':''
?>login.php">Login</a>
</nav></header><main>