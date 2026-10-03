<?php require_once 'includes/header.php'; ?>
<section class="page-title"><h1>Create Account</h1><p>Join our plant-loving community.</p></section>
<section class="section narrow"><form class="form-card" onsubmit="fakeRegister(event)">
<label>Full Name<input required></label><label>Email<input type="email" required></label>
<label>Password<input type="password" minlength="6" required></label>
<button class="btn">Create Account</button>
</form></section>
<?php require_once 'includes/footer.php'; ?>