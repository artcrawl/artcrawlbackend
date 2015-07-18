<?
include 'preheader.php';
$cmd=$_GET['cmd'];

switch($cmd){
	case 'listposts':include 'icl/listposts.inc.php';listposts();break;
	case 'likepost':include 'icl/likepost.inc.php';likepost();break;
	case 'newpost':include 'icl/newpost.inc.php';newpost();break;
	default: die('Unrecognized command '.$cmd);
}