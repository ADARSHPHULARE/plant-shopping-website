<?php require_once 'includes/header.php'; ?>
<section class="page-title"><h1>Welcome Back 🌱</h1><p>Login to manage your account.</p></section>
<section class="section narrow"><form class="form-card" onsubmit="fakeLogin(event)">
<label>Email<input type="email" required></label>
<label>Password<input type="password" required></label>
<button class="btn">Login</button>
<p class="muted">Demo login: any valid email and password.</p>
</form></section>
<?php require_once 'includes/footer.php'; ?>