<?php
function login_t411(){
$lien_login = "http://api.t411.io/auth";  //LINK TO T411 API
$data_login = array(
	"username" => "",  // YOUR USERNAME T411
	"password" => "",  // YOUR PASSWORD T411
);
$crl = curl_init();
curl_setopt($crl, CURLOPT_URL, $lien_login);
curl_setopt($crl, CURLOPT_POST,true);
curl_setopt($crl, CURLOPT_POSTFIELDS, $data_login);
curl_setopt($crl, CURLOPT_RETURNTRANSFER, TRUE);
$rest = curl_exec($crl);
curl_close($crl);
return($rest);
}

function stat_t411(){
$lien_id_profil = "http://api.t411.io/users/profile/96527295";  // LINK TO YOUR ID PROFILE
$access_token = json_decode(login_t411())->token;
$crl = curl_init();
$headr = array();
$headr[] = 'Authorization: ' . $access_token;
curl_setopt($crl, CURLOPT_URL, $lien_id_profil);
curl_setopt($crl, CURLOPT_HTTPHEADER,$headr);
curl_setopt($crl, CURLOPT_POST,false);
curl_setopt($crl, CURLOPT_RETURNTRANSFER, TRUE);
$rest = curl_exec($crl);
curl_close($crl);
return($rest);
}
?>
