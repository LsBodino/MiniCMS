<head>
<?php
include_once 'includes/header.php';
include_once 'includes/a-menu.php';
include_once 'includes/a-createpages.php';
?>
<script src="https://cdn.ckeditor.com/4.16.0/full/ckeditor.js"></script>
<style>
textarea.form-control {
    height: 50%;
}
</style>
<title><?= $l_panel ?> - <?= $l_createpage ?> | <?= $title ?></title>
</head>
<body>
   <div class="center">
      <div class="container">
         <div class="row">
            <h2><?= $l_createpage ?></h2>
            <?php if(isset($msg)) {
               echo '<div class="alert alert-danger" role="alert"><strong>'.$msg.'</strong></div>';
               } ?>
               <form method="POST">
                  <div class="form-group">
                     <input type="text" name="page_title" id="page_title" class="form-control" placeholder="<?= $l_name ?>" required/>
                     <br>
                     <textarea name="page_section" id="page_section" class="form-control" row="25" cols="100" placeholder="<?= $l_section ?>" required></textarea>
                     <script>
                     CKEDITOR.replace( 'page_section' );
                     </script>
                  </div>
                  <input type="submit" class="btn btn-danger btn-lg" value="<?= $l_publish ?>" />
               </form>
         </div>
      </div>
   </div>
</body>
<?php include_once 'includes/footer.php';?>
