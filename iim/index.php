<?php
header("access-control-allow-origin: *");
if (isset($_POST['tag']) && $_POST['tag'] != '') {

	$tag = $_POST['tag'];
	$response = array("sms"=>"Annapoorna Yojana", "dataArray" => array(array("number"=>"9900421328"), array("number"=>"9833909965"), array("number"=>"980009680"), array("number"=>"8792850324"), array("number"=>"7760117950"), array("number"=>"9374910200"), array("number"=>"7204799218"), array("number"=>"7406902265"), array("number"=>"9886680325")));

	if ($tag == 'fetch') {
		echo json_encode($response);
		}
	}
?>