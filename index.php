<?php
$page= isset($_GET["page"]) ? $_GET["page"] : 'homepage.php';
?>

<?php include "../inc/init.php" ?>

<?php include ROOT_PATH . "public/template-parts/header.php" ?>
 
 <div id="main" class="container" style="margin-top:30px;">
  <div class="row">
   
    <div class="col-9">
    <?php include ROOT_PATH . 'public/pages/' . $page ?> 
    </div>
   
    <?php include ROOT_PATH . "public/template-parts/sidebar.php" ?> 

</div>

<?php include ROOT_PATH . "public/template-parts/footer.php" ?> 