<?php

require_once './simple_html_dom.php';
$html = new simple_html_dom();


if (!isset($_REQUEST["id"])) {
    die(json_encode(["success" => false, "message" => "No id served"]));
} else {

    $id = $_REQUEST["id"];
    //$id = "HR-SARERA/IMO-9157404/MMSI-405000291";


    $url = "https://www.shiplocation.com/vessels/$id";

    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    $headers = array(
        "Referer: http://122.152.54.179/myportpanel/",
        "Content-Type: application/x-www-form-urlencoded",
    );
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

    $data = "";

    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

    //for debug only!
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

    $resp = curl_exec($curl);
    curl_close($curl);
    // die($resp);

    $html->load($resp);
    $tables = $html->find('td');
    $table = $tables[0];
    // $table2 = $table2[2];
    echo $table->save();

   $js = "
    <script>
    $('table tbody tr td[bgcolor=\"#B5EFF0\"]')
 .contents()
 .filter(function(){return this.nodeType === 8;}) //get the comments
 .replaceWith(function(){return this.data;})

 $('tr td[height=\"80px\"]').hide()

    </script>";
    echo $js;
    // echo $table2->save();

    
}