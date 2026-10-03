<?php require_once 'includes/header.php';
$products=[
['Snake Plant','Indoor',399,'🌿','Low-light friendly plant that is easy to maintain.'],
['Peace Lily','Indoor',499,'🌱','Elegant flowering indoor plant.'],
['Aloe Vera','Succulents',299,'🌵','Useful, hardy and easy to grow.'],
['Rose Plant','Flowering',349,'🌹','Bright flowering plant for your balcony.'],
['Money Plant','Indoor',249,'🍃','Popular low-maintenance indoor climber.'],
['Cactus','Succulents',199,'🌵','Compact plant needing very little water.'],
['Hibiscus','Flowering',299,'🌺','Colorful flowering plant for sunny spaces.'],
['Areca Palm','Outdoor',699,'🌴','Tropical greenery for home and office.']
];
$cat=$_GET['category']??'';
?>
<section class="page-title"><h1>Plant Collection</h1><p>Choose a plant that fits your space.</p></section>
<section class="section">
<div class="filters">
<a class="<?= $cat===''?'active':'' ?>" href="products.php">All</a>
<a class="<?= $cat==='Indoor'?'active':'' ?>" href="?category=Indoor">Indoor</a>
<a class="<?= $cat==='Outdoor'?'active':'' ?>" href="?category=Outdoor">Outdoor</a>
<a class="<?= $cat==='Succulents'?'active':'' ?>" href="?category=Succulents">Succulents</a>
<a class="<?= $cat==='Flowering'?'active':'' ?>" href="?category=Flowering">Flowering</a>
</div>
<div class="product-grid">
<?php foreach($products as $p): if($cat && $p[1]!==$cat) continue; ?>
<div class="product-card">
<div class="plant-img"><?= $p[3] ?></div><span class="tag"><?= $p[1] ?></span>
<h3><?= htmlspecialchars($p[0]) ?></h3><p class="muted"><?= htmlspecialchars($p[4]) ?></p>
<div class="product-bottom"><strong>₹<?= $p[2] ?></strong><button class="btn small" onclick="addToCart('<?= addslashes($p[0]) ?>',<?= $p[2] ?>)">Add to Cart</button></div>
</div>
<?php endforeach; ?>
</div></section>
<?php require_once 'includes/footer.php'; ?>