<?php
	require_once '../classes/classes.php';
  
  $newsUpload =  new SetNewsUpload;
	echo ($newsUpload->getNewsUpload());
	
?>