<?php
require_once('header.php');


	$view = new Template(); 

	$view->title = "dir"; 
	$view->content = "<div id='posts_edit'></div>";
	echo $view->render('templates/bootstrap.ytpl');

?>

<script src="js/tables_objs/posts.js" type="text/javascript"></script>
<script>
    $(document).ready(function () {
		y_jtable("#posts_edit","posts","action.php",0,posts_fields)
    });
</script>