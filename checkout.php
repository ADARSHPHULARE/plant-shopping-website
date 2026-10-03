<?php require_once 'includes/header.php'; ?>
<section class="page-title"><h1>Checkout</h1><p>Enter your delivery details.</p></section>
<section class="section narrow">
<form class="form-card" onsubmit="placeOrder(event)">
<label>Full Name<input required id="name"></label>
<label>Phone Number<input required id="phone" type="tel"></label>
<label>Address<textarea required id="address"></textarea></label>
<label>Payment Method<select><option>Cash on Delivery</option><option>UPI</option><option>Card</option></select></label>
<button class="btn" type="submit">Place Order</button>
</form>
</section>
<?php require_once 'includes/footer.php'; ?>