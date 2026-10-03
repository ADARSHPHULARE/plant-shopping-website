let cart=JSON.parse(localStorage.getItem("greennest_cart")||"[]");
function saveCart(){localStorage.setItem("greennest_cart",JSON.stringify(cart));updateCount();}
function updateCount(){let el=document.getElementById("cartCount");if(el)el.textContent=cart.reduce((s,i)=>s+i.qty,0);}
function addToCart(name,price){let item=cart.find(i=>i.name===name);if(item)item.qty++;else cart.push({name,price,qty:1});saveCart();alert(name+" added to cart!");}
function renderCart(){let box=document.getElementById("cartBox");if(!box)return;if(!cart.length){box.innerHTML='<h3>Your cart is empty 🌱</h3><p class="muted">Add some plants to get started.</p><a class="btn" href="products.php">Shop Plants</a>';return;}let total=0;box.innerHTML=cart.map((i,n)=>{total+=i.price*i.qty;return `<div class="cart-item"><div><b>${i.name}</b><div class="muted">₹${i.price} × ${i.qty}</div></div><button onclick="removeItem(${n})">Remove</button></div>`}).join('')+`<div class="total">Total: ₹${total}</div><a class="btn" href="checkout.php">Proceed to Checkout</a>`}
function removeItem(n){cart.splice(n,1);saveCart();renderCart();}
function placeOrder(e){e.preventDefault();if(!cart.length){alert("Your cart is empty.");location.href="products.php";return}alert("Order placed successfully! (Demo)");cart=[];saveCart();location.href="index.php";}
function fakeLogin(e){e.preventDefault();alert("Login successful! (Demo)");location.href="index.php";}
function fakeRegister(e){e.preventDefault();alert("Account created! (Demo)");location.href="login.php";}
document.addEventListener("DOMContentLoaded",()=>{updateCount();renderCart();});