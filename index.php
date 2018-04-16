<?php require 'inc/head.php';
?>
<section class="cookies container-fluid">
  <div class="row">
    <form role="form" action="post_addcart.php" method="POST">
      <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
        <figure class="thumbnail text-center">
          <img src="assets/img/product-46.jpg" alt="Pecan nuts" class="img-responsive">
          <figcaption class="caption">
            <h3>Pecan nuts</h3>
            <p>Cooked by Penny !</p>
              <button type="submit" name="submit" value="pecan_nuts">
                  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
              </button>
          </figcaption>
        </figure>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
        <figure class="thumbnail text-center">
          <img src="assets/img/product-36.jpg" alt="Chocolate chips" class="img-responsive">
          <figcaption class="caption">
            <h3>Chocolate chips</h3>
            <p>Cooked by Bernadette !</p>
              <button type="submit" name="submit" value="chocolate_chips">
                  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
              </button>
          </figcaption>
        </figure>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
        <figure class="thumbnail text-center">
          <img src="assets/img/product-58.jpg" alt="Chocolate cookie" class="img-responsive">
          <figcaption class="caption">
            <h3>Chocolate cookie</h3>
            <p>Cooked by Bernadette !</p>
              <button type="submit" name="submit" value="chocolate_cookie">
                  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
              </button>
          </figcaption>
        </figure>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
        <figure class="thumbnail text-center">
          <img src="assets/img/product-32.jpg" alt="M&M's cookies" class="img-responsive">
          <figcaption class="caption">
            <h3>M&M's&copy; cookies</h3>
            <p>Cooked by Penny !</p>
              <button type="submit" name="submit" value="mm_cookies">
                  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
              </button>
          </figcaption>
        </figure>
      </div>
    </form>
  </div>
</section>
<?php require 'inc/foot.php'; ?>
