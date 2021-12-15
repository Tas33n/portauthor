<?php

require_once './simple_html_dom.php';
$html = new simple_html_dom();


if (!isset($_REQUEST["id"])) {
 //   die(json_encode(["success" => false, "message" => "No id served"]));
//} else {

    $id = $_REQUEST["id"];

    $url = "http://122.152.54.179/myportpanel/index.php/report/mySearchContainerLocation";

    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    $headers = array(
        "Referer: http://122.152.54.179/myportpanel/",
        "Content-Type: application/x-www-form-urlencoded",
    );
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

    $data = "containerLocation=CRSU1274363&submit_login=Search";

    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

    //for debug only!
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

    $resp = curl_exec($curl);
    curl_close($curl);
    // die($resp);
echo $resp;
    $html->load($resp);
    $ret = $html->find('tbody');
     $tables = $html->find('table');
   // $table = $tables[1];
    //echo $table->save();

}
