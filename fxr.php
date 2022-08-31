<?php 

// $htmlString = file_get_contents('https://www.sonalibank.com.bd/Doc_file/US%20Dollar%20Premium%20Bond%20Rules.doc');

$curl_handle=curl_init();
curl_setopt($curl_handle, CURLOPT_URL,'https://www.sonalibank.com.bd/Doc_file/US%20Dollar%20Premium%20Bond%20Rules.doc');
curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 2);
curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl_handle, CURLOPT_USERAGENT, 'SONALI BANK');
$query = curl_exec($curl_handle);
curl_close($curl_handle);

//Create a new DOMDocument object.
$htmlDom = new DOMDocument;

//Load the HTML string into our DOMDocument object.
@$htmlDom->loadHTML($query);

//Extract all anchor elements / tags from the HTML.
$anchorTags = $htmlDom->getElementsByTagName('a');

//Create an array to add extracted images to.
$extractedAnchors = array();

//Loop through the anchors tags that DOMDocument found.
foreach($anchorTags as $anchorTag){

    //Get the href attribute of the anchor.
    $aHref = $anchorTag->getAttribute('href');

    //Add the anchor details to $extractedAnchors array.
    $extractedAnchors[] = array(
        'href' => $aHref
    );
}

// echo "<pre>";
// print_r our array of anchors.
// print_r($extractedAnchors);

echo $extractedAnchors[122]["href"];

