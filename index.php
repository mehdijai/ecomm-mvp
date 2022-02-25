<?php
include "./includes/header.php";
include "./crud.php";
?>
<header class="hero">
    <h1>For All the good Grown and Puppies, <span>Woof!</span></h1>
    <button>Shop now!</button>
</header>
<section class="featured">
    <header class="section-herder">
        <h2>Our Best Sellers</h2>
        <button>View all &#8594;</button>
    </header>
    <?php if($featured->rowCount() > 0) {?>
    <article class="card-container">
        <?php while($row = $featured->fetch()) { ?>
        <div class="card">
            <img src="<?= $row['image'] ?>" alt="<?= $row['title'] ?>">
            <label><?= $row['title'] ?></label>
            <span>$<?= $row['price'] ?></span>
        </div>
        <?php }?>
    </article>
    <?php }?>
</section>
<section class="explore">
    <h2>Explore Categories</h2>
    <article>
        <div class="image-container"><img src="https://images.unsplash.com/photo-1589391248100-0da9b7819dab?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=555&q=80" alt=""></div>
        <aside class="categories">
            <ul class="categories-list">
                <li class="list-item"><a href="/">Beds</a></li>
                <li class="list-item"><a href="/">Bowls</a></li>
                <li class="list-item"><a href="/">Collars</a></li>
                <li class="list-item"><a href="/">Toys</a></li>
                <li class="list-item"><a href="/">Apparel</a></li>
            </ul>
        </aside>
    </article>
</section>
<?php
include "./includes/footer.php";
?>