<?php
require_once 'includes/header.php';
require_once 'includes/menu.php';

// Database call
if(isset($_GET['id']) AND $_GET['id'] > 0){
   $id_get = intval($_GET['id']);
   $page_req = $db->prepare('SELECT * FROM pages WHERE id = ? AND visible = 1');
   $page_req->execute(array($id_get));
   $page_exist = $page_req->rowCount();
   $smarty->assign('page_req', $page_req);
   if($page_exist == 0){ 
      header("Location: $link/error/404");
   }else{
// Template call
      $smarty->display("themes/$theme/page.tpl"); 
   }
   }else{
      header("Location: $link/error/405");
   }
require_once 'includes/footer.php'; ?>