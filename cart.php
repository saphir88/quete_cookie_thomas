<?php require 'inc/head.php';
if (!isset($_SESSION["loginname"])) {
  header('location:login.php');
}
?>
<section class="cookies container-fluid">
    <div class="row">
        <p>Vous avez sélectionné :</p>
        <p>- Pecan nuts : </p><?php if (isset($_COOKIE['pecan_nuts'])) {echo $_COOKIE['pecan_nuts'].'<br>';} else {echo '0 <br>';} ?>
        <p>- Chocolate chips : </p><?php if (isset($_COOKIE['chocolate_chips'])) {echo $_COOKIE['chocolate_chips'].'<br>';} else {echo '0 <br>';} ?>
        <p>- Chocolate cookie : </p><?php if (isset($_COOKIE['chocolate_cookie'])) {echo $_COOKIE['chocolate_cookie'].'<br>';} else {echo '0 <br>';} ?>
        <p>- M&M's cookies : </p><?php if (isset($_COOKIE['mm_cookies'])) {echo $_COOKIE['mm_cookies'].'<br>';} else {echo '0 <br>';} ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
