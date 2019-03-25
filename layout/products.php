<div class="columns products">
    <?php
    foreach (App\Product::get() as $product) { ?>
    <div class="column col-3 col-md-6 col-xs-12">
        <div class="card">
            <div class="card-image">
                <img class="img-responsive" src="https://placeimg.com/640/280/any" alt="<?php echo $product['name'] ?>">
            </div>
            <div class="card-header">
                <div class="card-title h5"><?php echo $product['name'] ?></div>
                <div class="card-subtitle text-gray">$<?php echo number_format($product['price'], 2) ?></div>
            </div>
            <div class="card-body">
                Empower every person and every organization on the planet to achieve more.
            </div>
            <div class="card-footer">
                <a class="btn btn-primary" href="/cart.php?item=<?php echo $product['name'] ?>&action=add">Add to Cart</a>
            </div>
        </div>
    </div>
    <?php } ?>
</div>