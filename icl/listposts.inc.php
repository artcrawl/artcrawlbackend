<?

function listposts(){
	global $db;
	$locality=GETSTR('locality');
	if(!$locality){echo json_encode(array("success"=>"false"));}
	$query="select * from artworks where locality='$locality' order by likes desc";
	$rs=sql_query($query, $db);
	if(!$rs){echo json_encode(array("success:false"));die();}
	$data=array();
	while($myrow=sql_fetch_array($rs)){
		array_push($data, array(
			"artworkid"=>$myrow['artworkid']+0,
			"createdate"=>$myrow['createdate']+0,
			"userid"=>$myrow['userid'],
			"price"=>$myrow['price']+0,
			"likes"=>$myrow['likes']+0,
			"geolat"=>$myrow['geolat']+0,
			"geolong"=>$myrow['geolong']+0,
			"image"=>$myrow['image'],
			"onsale"=>$myrow['onsale']+0,
			"title"=>$myrow['title'],
			"locality"=>$myrow['locality']
		));
	}
	$stats=array("itemcount"=>sql_affected_rows($db,$rs));
	$response=array("data"=>$data, "stats"=>$stats);
	echo json_encode($response);
}