<?php require_once 'includes/header.php'; ?>
<section class="hero">
  <div>
    <span class="badge">GREEN YOUR SPACE</span>
    <h1>Bring nature<br><span>home.</span></h1>
    <p>Beautiful plants, stylish pots and simple care tips — all in one place.</p>
    <a class="btn" href="products.php">Shop Plants</a>
  </div>
  <div class="hero-art">🌿<span>🪴</span></div>
</section>

<section class="section">
  <div class="section-head"><h2>Shop by Category</h2><a href="products.php">View all →</a></div>
  <div class="categories">
    <a href="products.php?category=Indoor" class="category">🪴<b>Indoor Plants</b><small>Easy & beautiful</small></a>
    <a href="products.php?category=Outdoor" class="category">🌳<b>Outdoor Plants</b><small>Fresh garden picks</small></a>
    <a href="products.php?category=Succulents" class="category">🌵<b>Succulents</b><small>Low maintenance</small></a>
    <a href="products.php?category=Flowering" class="category">🌸<b>Flowering</b><small>Color your space</small></a>
  </div>
</section>

<section class="section">
  <div class="section-head"><h2>Popular Plants</h2><a href="products.php">See all →</a></div>
  <div class="product-grid">
    <?php
    $products = [
      ['Snake Plant','Indoor','399','🌿'],
      ['Peace Lily','Indoor','499','🌱'],
      ['Aloe Vera','Succulents','299','🌵'],
      ['Rose Plant','Flowering','349','🌹']
    ];
    foreach($products as $p): ?>
      <div class="product-card">
        <div class="plant-img"><?= $p[3] ?></div>
        <span class="tag"><?= htmlspecialchars($p[1]) ?></span>
        <h3><?= htmlspecialchars($p[0]) ?></h3>
        <div class="price">₹<?= $p[2] ?></div>
        <a class="btn small" href="products.php">View Plant</a>
      </div>
    <?php endforeach; ?>
  </div>
</section>
<?php require_once 'includes/footer.php'; ?>