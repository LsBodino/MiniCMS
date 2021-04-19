<?php
session_start();
include_once "includes/config.php";
include_once "includes/cookies.php";
include_once "lang/$lang.php"; 
?>
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet" type="text/css">
<link href="<?= $link?>/themes/<?= $theme?>/css/global.css" rel="stylesheet" media="all" type="text/css"> 
<link href="<?= $link?>/themes/<?= $theme?>/css/bootstrap.min.css" rel="stylesheet" media="all" type="text/css">
<link href="<?= $link?>/themes/<?= $theme?>/css/site.pml.css" rel="stylesheet" media="all" type="text/css">
<link href="<?= $link?>/themes/<?= $theme?>/css/bootflat.pml.css" rel="stylesheet" media="all" type="text/css">
<script src="<?= $link?>/themes/<?= $theme?>/js/global.js"></script>
<script src="<?= $link?>/themes/<?= $theme?>/js/bootstrap.min.js"></script>
<script src="<?= $link?>/themes/<?= $theme?>/js/application.js"></script>
<script src="<?= $link?>/themes/<?= $theme?>/js/jquery.js"></script>
<script src="<?= $link?>/themes/<?= $theme?>/js/respond.min.js"></script>
<script src="<?= $link?>/themes/<?= $theme?>/js/site.min.js"></script>
<style>
body
{
font-family: "Source Sans Pro", serif;
}
</style>
<link rel="shortcut icon" href="<?= $link?>/img/favicon.png" type="image/x-icon"/>
<center>
<div class="jumbotron text-center">
<h1><?= strtoupper($title)?></h1>
<br>
<div class="container">
<div class="row">
<div class="col-md-12">
<p><?= $descr?></p>
<ul class="nav nav-pills nav-justified">
<li class="active"><a href="<?= $link?>/index"><?= $l_house?></a></li>
<?php $pages = NULL;
$pages = $db->query('SELECT * FROM pages ORDER by id DESC');
while($p = $pages->fetch()) { ?>
<li><a href="<?= $link?>/page/<?= $p['id'] ?>"><?= $p['titre'] ?></a></li>
<?php } ?>
<?php if(!isset($_SESSION['id'])) { ?>
<li><a href="<?= $link?>/register"><?= $l_register?></a></li>
<li><a href="<?= $link?>/login"><?= $l_login?></a></li>
<?php }else{ ?>
<li><a href="<?= $link?>/space/<?= $_SESSION['id'] ?>"><?= $l_myspace?></a></li>
<li><a href="<?= $link?>/logout"><?= $l_logout?></a></li>
<?php } ?>
</ul></div></div></div></div>
</center>