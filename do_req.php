<?php

require_once './simple_html_dom.php';
$html = new simple_html_dom();


if (!isset($_REQUEST["id"])) {
    die(json_encode(["success" => false, "message" => "No id served"]));
} else {

    $id = $_REQUEST["id"];

    $url = "http://cpatos.gov.bd/pcs/index.php/Report/mySearchContainerLocation";

    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    $headers = array(
        "Referer: http://cpatos.gov.bd/pcs/",
        "Content-Type: application/x-www-form-urlencoded",
    );
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

    $data = "containerLocation=$id&submit_login=Search";

    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

    //for debug only!
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

    $resp = curl_exec($curl);
    curl_close($curl);
    // die($resp);

    $html->load($resp);
    $tables = $html->find('table');
    $table = $tables[1];
    $table2 = $tables[2];
    echo $table->save();

   $js = "
    <script>
    $('table tbody tr td[bgcolor=\"#B5EFF0\"]')
 .contents()
 .filter(function(){return this.nodeType === 8;}) //get the comments
 .replaceWith(function(){return this.data;})

$('tr td[height=\"80px\"]').hide()

    </script>";
    //echo $js;
     echo $table2->save();
    
}