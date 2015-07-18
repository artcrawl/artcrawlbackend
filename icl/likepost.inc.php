<?

function likepost(){
	global $db;
	$artworkid=POSTVAL('artworkid');
	$query="update artworks set likes = likes + 1 where artworkid=$artworkid";
	$rs=sql_query($query, $db);
	if(!$rs){echo json_encode(array("success"=>"false"));die();}
	echo json_encode(array("success"=>"true"));
}