<?
function newpost(){
	global $db;
	$title=POSTSTR('title');
	$createdate=time();
	$userid=POSTVAL('userid');
	$price=POSTVAL('price');
	$price=round((!$price)?:$price, 2);
	$likes=0;
	$geolat=POSTVAL('geolat');
	$geolong=POSTVAL('geolong');
	$image=POSTSTR('image');
	$onsale=POSTVAL('onsale');
	$locality=POSTSTR('locality');

	$query="insert into artworks (title, createdate, price, likes, geolat, geolong, onsale, locality, image) values ('$title', $createdate, $price, $likes, $geolat, $geolong, $onsale, '$locality', '$image')";
	$rs=sql_query($query, $db);
	if(!$rs){echo json_encode(array("success"=>"false"));die();}
	echo json_encode(array("success"=>"true"));
}
