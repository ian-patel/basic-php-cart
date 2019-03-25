<div class="columns">
    <div class="column col-4 col-xs-12">
        <div class="panel">
            <div class="panel-header">
                <div class="panel-title h6">Items</div>
            </div>
            <div class="panel-body">
                <?php
                foreach (App\Cart::get() as $item => $qty) {
                    $product = App\Product::find($item);
                    ?>
                <div class="tile">
                    <div class="tile-icon">
                        <figure class="avatar"><img src="https://placeimg.com/640/280/any" alt="Avatar"></figure>
                    </div>
                    <div class="tile-content">
                        <p class="tile-title text-bold">
                            <?php echo $product['name'] ?>
                            <span class="text-right cart-remove">
                                <a href="/cart.php?item=<?php echo $product['name'] ?>&action=remove">remove</a>
                            </span>
                        </p>
                        <p class="text-gray">Earth's Mightiest Heroes joined forces</p>
                        <p class="tile-subtitle">Qty: <?php echo $qty ?>, Price: $<?php echo number_format($product['price'], 2) ?>/ piece</p>
                        <p class="text-right">$<?php echo number_format($product['price'] * $qty, 2) ?></p>
                    </div>
                </div>
                <div class="divider text-center"></div>
                <?php
            } ?>
            </div>
            <div class="panel-footer">
                <h5 class="text-right">Total: $<?php echo number_format(App\Cart::total(), 2) ?></h5>
            </div>
        </div>
    </div>
</div>