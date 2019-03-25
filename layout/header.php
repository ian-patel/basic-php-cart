<header class="navbar">
  <section class="navbar-section">
    <a href="/" class="navbar-brand mr-2 menu-logo">Ip</a>
    <a href="https://github.com/ian-patel/ezyvet" target="_new" class="btn btn-link">GitHub</a>
    <a href="/cart.php" class="btn btn-link">Cart
    <?php echo App\Cart::numberOfItems() > 0 ? '(' . App\Cart::numberOfItems() . ')' : '' ?>
    </a>
  </section>
</header>
<div class="divider text-center"></div>