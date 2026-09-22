<?php
$products = [
    ['id' => 1, 'name' => 'Strawberry Cloud Cake', 'category' => 'cakes', 'price' => 42.00, 'tag' => 'Bestseller', 'description' => 'Vanilla sponge, strawberry compote and whipped mascarpone.', 'image' => 'https://images.unsplash.com/photo-1578985545062-69928b1d9587?auto=format&fit=crop&w=900&q=85'],
    ['id' => 2, 'name' => 'Morning Bun Box', 'category' => 'pastries', 'price' => 18.00, 'tag' => 'Fresh today', 'description' => 'Six buttery, cinnamon-swirled buns with orange glaze.', 'image' => 'https://images.unsplash.com/photo-1555507036-ab1f4038808a?auto=format&fit=crop&w=900&q=85'],
    ['id' => 3, 'name' => 'Dark Chocolate Tart', 'category' => 'cakes', 'price' => 28.00, 'tag' => 'Staff pick', 'description' => 'Silky 70% chocolate ganache on a crisp cocoa crust.', 'image' => 'https://images.unsplash.com/photo-1606313564200-e75d5e30476c?auto=format&fit=crop&w=900&q=85'],
    ['id' => 4, 'name' => 'Sourdough Loaf', 'category' => 'bread', 'price' => 9.00, 'tag' => 'Baked daily', 'description' => 'Naturally leavened, crackly crust and a soft, tangy crumb.', 'image' => 'https://images.unsplash.com/photo-1509440159596-0249088772ff?auto=format&fit=crop&w=900&q=85'],
    ['id' => 5, 'name' => 'Pistachio Croissant', 'category' => 'pastries', 'price' => 6.50, 'tag' => 'New', 'description' => 'Laminated pastry filled with pistachio frangipane.', 'image' => 'https://images.unsplash.com/photo-1555507036-ab1f4038808a?auto=format&fit=crop&w=900&q=85'],
    ['id' => 6, 'name' => 'Salted Caramel Cookies', 'category' => 'treats', 'price' => 12.00, 'tag' => 'Two dozen', 'description' => 'Chewy brown butter cookies with pools of sea salt caramel.', 'image' => 'https://images.unsplash.com/photo-1499636136210-6f4ee915583e?auto=format&fit=crop&w=900&q=85']
];
$categories = ['all' => 'Everything', 'cakes' => 'Cakes', 'pastries' => 'Pastries', 'bread' => 'Bread', 'treats' => 'Treats'];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Handmade cakes, pastries, bread and sweet treats from Crumb & Butter bakery.">
    <title>Crumb & Butter | Small batch bakery</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<header class="site-header">
    <div class="container nav-wrap">
        <a class="brand" href="index.php" aria-label="Crumb and Butter home"><span class="brand-mark">C<span>&</span>B</span><span>crumb<br><em>& butter</em></span></a>
        <nav aria-label="Main navigation"><a href="#menu">Menu</a><a href="#story">Our story</a><a href="#visit">Visit us</a></nav>
        <button class="cart-button" type="button" data-cart-open aria-label="Open shopping bag"><span>Bag</span><strong id="cart-count">0</strong></button>
    </div>
</header>

<main>
    <section class="hero">
        <div class="container hero-grid">
            <div class="hero-copy"><p class="eyebrow">Small batch · Big heart</p><h1>Made slow.<br><i>Enjoyed slowly.</i></h1><p class="hero-text">Beautifully imperfect bakes, made by hand in the heart of the city. Come for the croissants, stay for the good company.</p><a class="button button-dark" href="#menu">Shop the menu <span>↘</span></a></div>
            <div class="hero-art"><div class="hero-label">Baked fresh<br><strong>every morning</strong></div><img src="https://images.unsplash.com/photo-1551024506-0bccd828d307?auto=format&fit=crop&w=1000&q=85" alt="Glazed pastries on a bakery tray"><span class="stamp">Since<br><b>2018</b></span></div>
        </div>
    </section>

    <section class="menu-section container" id="menu">
        <div class="section-heading"><div><p class="eyebrow">The good stuff</p><h2>Today’s favourites</h2></div><p class="heading-note">Everything is baked in small batches<br>and ready for a little joy.</p></div>
        <div class="category-tabs" role="tablist" aria-label="Product categories">
            <?php foreach ($categories as $key => $label): ?><button class="category-tab<?php echo $key === 'all' ? ' active' : ''; ?>" type="button" data-category="<?php echo htmlspecialchars($key); ?>"><?php echo htmlspecialchars($label); ?></button><?php endforeach; ?>
        </div>
        <div class="product-grid" id="product-grid">
            <?php foreach ($products as $product): ?>
                <article class="product-card" data-category="<?php echo htmlspecialchars($product['category']); ?>">
                    <div class="product-image"><img src="<?php echo htmlspecialchars($product['image']); ?>" alt="<?php echo htmlspecialchars($product['name']); ?>"><span class="product-tag"><?php echo htmlspecialchars($product['tag']); ?></span><button class="quick-add" type="button" data-add="<?php echo $product['id']; ?>" aria-label="Add <?php echo htmlspecialchars($product['name']); ?> to bag">+</button></div>
                    <div class="product-info"><div><h3><?php echo htmlspecialchars($product['name']); ?></h3><p><?php echo htmlspecialchars($product['description']); ?></p></div><strong>$<?php echo number_format($product['price'], 2); ?></strong></div>
                </article>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="story-section" id="story"><div class="container story-grid"><img src="https://images.unsplash.com/photo-1509440159596-0249088772ff?auto=format&fit=crop&w=900&q=85" alt="Freshly baked sourdough bread on a counter"><div><p class="eyebrow">A little about us</p><h2>Good bread takes time.<br>So do good things.</h2><p>Crumb & Butter started with one oven, two friends and an unreasonable love of butter. We still make everything from scratch, use seasonal ingredients and believe the best conversations happen around a warm table.</p><a class="text-link" href="#visit">Come say hello <span>↗</span></a></div></div></section>
    <section class="visit-section container" id="visit"><p class="eyebrow">Find us</p><h2>Come hungry, leave happy.</h2><div class="visit-details"><p><strong>18 Willow Lane</strong><br>Monday – Saturday, 7am – 4pm<br>Sunday, 8am – 2pm</p><p><strong>Questions?</strong><br><a href="mailto:hello@crumbandbutter.test">hello@crumbandbutter.test</a><br>(555) 019-2018</p><a class="button button-outline" href="mailto:hello@crumbandbutter.test">Order a custom cake <span>↗</span></a></div></section>
</main>

<aside class="cart-drawer" id="cart-drawer" aria-label="Shopping bag" aria-hidden="true"><div class="drawer-header"><h2>Your bag</h2><button type="button" data-cart-close aria-label="Close shopping bag">×</button></div><div id="cart-items" class="cart-items"><p class="empty-cart">Your bag is waiting for something sweet.</p></div><div class="cart-footer"><div><span>Subtotal</span><strong id="cart-total">$0.00</strong></div><button class="button button-dark checkout-button" type="button">Checkout <span>↗</span></button><small>Pickup and local delivery available.</small></div></aside><div class="drawer-backdrop" data-cart-close></div>
<footer class="site-footer"><div class="container"><a class="brand" href="index.php"><span class="brand-mark">C<span>&</span>B</span><span>crumb<br><em>& butter</em></span></a><p>Made with care in the city.</p><p>© <?php echo date('Y'); ?> Crumb & Butter Bakery</p></div></footer>
<script>window.bakeryProducts = <?php echo json_encode($products, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT); ?>;</script>
<script src="assets/js/app.js"></script>

</body>
</html>
