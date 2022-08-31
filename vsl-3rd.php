<?php 
// Include visitor log script 
include_once 'log.php'; 
?>

<?php

require_once './simple_html_dom.php';
$html = new simple_html_dom();

    $url = "";

    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    $headers = array(
        "Referer: http://122.152.54.179/myportpanel/",
        "Content-Type: application/x-www-form-urlencoded",
    );
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

   // $data = "";

   // curl_setopt($curl, CURLOPT_POSTFIELDS);

    //for debug only!
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

    $resp = curl_exec($curl);
    curl_close($curl);
    // die($resp);

    $html->load($resp);
    $tables = $html->find('table');
    $table = $tables[4];
    // $table2 = $table2[2];
    //echo $table;

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

?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="9mdEGpgM3LnGoJftG8wv-Q1HGGczWfUfXEvffVF_jLs" />
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-22929K7W8X"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-22929K7W8X');
</script>
    
    <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="icon" href="/icon.jpg">
    
    <!-- Primary Meta Tags -->
      <title>Container Info by Sohag</title>
<meta name="title" content="Container Info | All About Container ">
<meta name="description" content="Cont Redthryssa is a unofficial website, where you can get all the info you need of a container..">
<meta name="Keywords" content="ctg port, ctg port authority, redthryssa, sohag, taseen website, container info, c and f, c n f, cont redthryssa, cont,redthryssa, cont,ctg port bd,ctg port berthing, ctg port job circular,ctg port gov bd,ctg port container location, container position,ctms ctg port,ctg port application,">
<meta property="og:image" content="/bg.jpg">
    <style>
     img[src*="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"] {
display: none;}

a:hover{
        text-shadow: 6px 6px 8px #7904ff;
        color: white;
}
    
    .lds-dual-ring {
  display: inline-block;
  width: 80px;
  height: 80px;
}
.lds-dual-ring:after {
  content: " ";
  display: block;
  width: 64px;
  height: 64px;
  margin: 8px;
  border-radius: 50%;
  border: 6px solid #fff;
  border-color: #fff transparent #fff transparent;
  animation: lds-dual-ring 1.2s linear infinite;
}
@keyframes lds-dual-ring {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}

.iframe{
     text-align: center;
    min-height: 200px;
}

      html { 
          background: #00c5c5;
          
      }
      body {
          background: transparent;
          TEXT-SHADOW: 1PX 1PX #1800ab;
      }
#cont,#more,#vasel {
    border-radius: 8px;
    background: rgba(0,0,0,0.7);
    color: WHITE;
}
#cont {
    padding: 30px;
    
}

/*
 *  scroll bar
 */

.iframe::-webkit-scrollbar-track
{
	border: 1px solid black;
	background-color: #00c5c5;
}

.iframe::-webkit-scrollbar
{
	height: 10px;
	background-color: #F5F5F5;
}

.iframe::-webkit-scrollbar-thumb
{
	background-color: #000000;	
}
 /* vsl */
.vsl::-webkit-scrollbar-track
{
	border: 1px solid black;
	background-color: #00c5c5;
}

.vsl::-webkit-scrollbar
{
	height: 10px;
	background-color: #F5F5F5;
}

.vsl::-webkit-scrollbar-thumb
{
	background-color: #000000;	
}


table{
    color: white;
}
#vasel table{
   width: 100%;
}
#vasel tr:hover {
background: white;
color: #3300ff;
}
.iframe {
    overflow: scroll;
    overflow-Y: hidden;
}
#more{
    margin-bottom: 100px;
    text-align: center;
    padding: 20px;
    margin-top: 20px;
}
.gridDark{
    text-align: center;
    background: white;
color: #3300ff;
font-weight: 600;
}

td{
    background: transparent;
    font-size: 14px;
    text-align: center;
}
#cont table td{
   text-align: left;
}
#vasel table td{
    border: 1.5px solid #00c5c5;
    height: 50px;
}

b{
    display:block;
    min-width: 180px;
}
a{
    text-decoration: none;
    color: aqua;
}
tr > td > tr:hover {
background: aqua;
color: #3300ff;
}

.hid {
    display: none;
}
.nav-item a:hover,.active a{
    color: white !important;
    text-shadow: 1px 1px #4300ff;
}


.gridDark:first-child {
  display: revert !important;
}



.vessel_table {
    width: 100%;
    border-collapse: collapse;
    box-shadow: 0 4px 8px -5px rgb(100, 100, 100), -2px 0 8px -6px rgb(100, 100, 100), 2px 0px 8px -6px rgb(100, 100, 100);
    -moz-box-shadow: 0 4px 8px -5px rgb(100, 100, 100), -2px 0 8px -6px rgb(100, 100, 100), 2px 0px 8px -6px rgb(100, 100, 100);
    -webkit-box-shadow: 0 4px 8px -5px rgb(100, 100, 100), -2px 0 8px -6px rgb(100, 100, 100), 2px 0px 8px -6px rgb(100, 100, 100);
}

.vessel_row_main {
    background-color: #5f5f5f;
    color: white;
    font-weight: bold;
    font-family: Calibri;
    text-align: center;
}

.vessel_row_main a {
    display: inline-block;
    width: 100%;
    color: white;
    border-top: 3px solid #5f5f5f;
    border-bottom: 3px solid #5f5f5f;
    padding: 22px 0px;
    height: 66px;
    -webkit-transition-duration: 0.4s;
    transition-duration: 0.4;
}

.vessel_row_main a:hover {
    color: rgb(76, 205, 100);
    border-bottom: 3px solid lime;
    -webkit-transition-duration: 0.4s;
    transition-duration: 0.4;
}

.vessel_td_main {
    height: 60px;
}

.vessel_td_main a:hover {
    text-decoration: none;
}

.vessel_row {
    font-family: Calibri;
    background-color: transparent;
    color: black;
    text-align: center;
}

.vessel_row a {
    color: darkgreen;
}

.vessel_row:hover td {
    background-color: #d1d8e0;
}

.vessel_link a {
    color: white;
    padding: 19px 5px;
    width: 100%;
    border: inset 1px;
    border-color: #4caf50;
    border-style: solid;
    font-size: 1.1em;
    display: block;
    background-color: #4caf50;
    text-align: center;
    -webkit-transition-duration: 0.4s;
    transition-duration: 0.4;
}

.vessel_link a:hover {
    background-color: #e3e7e9;
    color: #4caf50;
    -webkit-transition-duration: 0.4s;
    /* Safari */
    transition-duration: 0.4;
}

.vessel_td {
    height: 60;
}

.vessel_td a:hover {
    text-decoration: underline;
}

.vessel_td a:visited {
    color: darkgreen;
}

.vessel_td img {
    width: 38px;
    height: 22px;
    border-radius: 3px 3px 3px 3px;
    box-shadow: 0 4px 8px -3px rgb(100, 100, 100), -2px 0 8px -6px rgb(100, 100, 100), 2px 0px 8px -6px rgb(100, 100, 100);
    -moz-box-shadow: 0 4px 8px -3px rgb(100, 100, 100), -2px 0 8px -6px rgb(100, 100, 100), 2px 0px 8px -6px rgb(100, 100, 100);
    -webkit-box-shadow: 0 4px 8px -3px rgb(100, 100, 100), -2px 0 8px -6px rgb(100, 100, 100), 2px 0px 8px -6px rgb(100, 100, 100);
}

.vessel_td_container {
    height: 60;
}

.vessel_td_container a:hover {
    text-decoration: underline;
}

.vessel_td_container a:visited {
    color: darkgreen;
}

.td-orange-text {
    color: darkorange;
    font-weight: normal;
}

.td-min100 {
    min-width: 100px;
}

.td-vessel-sort {
    margin: 0px 0px 0px 16px;
}

.td-vessel-arrow {
    font-size: 14px;
    float: right;
    font-weight: normal;
}

.vessel_row {
    background: white;
}

    </style>
</head>
<body class="container">
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark" style="
    background: black !important;
">
  <a class="navbar-brand" href="#" style="font-size: 28px;
    line-height: 0;"><img src="/icon.jpg" style="height: 35px;"> PortAuthor</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/ctms.php">CTMS</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" target="_blank" href="/smail/index.html">S-Mail</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto" style="
    margin-left: auto; text-align: right;
">
      <li class="nav-item">
        <a class="nav-link" target="_blank"  href="https://github.com/tas33n">made by Sohag</a>
      </li>
    </ul>
  </div>
</nav>
    
    
    
    
    
        <div id="cont" style="
    margin-top: 67px;
">
        <h4 class="text-center mt-3">VASSEL INFO FROM 3RD PARTY</h4>
    

    <form class="form" id="mainForm" style="
    padding-bottom: 40px;
">
        <div class="mb-3 mt-5">
           <!-- <label for="locationInp" class="form-label">SEARCH BY VASSEL NAME / FLAG / CALL SIGN / IMO / MMSI</label>-->
            <input class="form-control" id="locationInp" type="text" placeholder="SEARCH BY VASSEL NAME / FLAG / CALL SIGN / IMO / MMSI" aria-label="LOCATION ID" onkeypress="showdiv()" required>
        </div>
        <input type="submit" id="locationId" class="btn text-center btn-primary" value="SEARCH"></input>
   
    </form>

    <div class="iframe hid col-sm-12" id="iframe">
        	<div class="lds-dual-ring"></div>
    </div>
    
 </div>

 
    
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script>
        
        $(document).ready(() => {

    $('#locationId').click((e) => {
        e.preventDefault()
        $('#mainForm').submit()
    })

    $('#mainForm').submit((e) => {
        e.preventDefault();
        console.log('submit');
        id = $('#locationInp').val();
        var url = "im.php?id="+id;
        $.ajax({
            url: url,
        }).done((resp)=>{
            $('#iframe').html(resp)
            $('#iframe').removeClass('visually-hidden')
        })

        // $('#iframe').html(`
        // <iframe src="${url}">

        // </iframe>
        // `)


    })

    send_html = (html) => {
        $('#iframe').html(html)
        $('#iframe').removeClass('#visually-hidden')
    }

})
    </script>
    <script>
$('#locationId').click(function() {
    $('#iframe').css({
        'display': 'block'
    });
});
</script>


<script>
     $("#filter").keyup(function() {

      // Retrieve the input field text and reset the count to zero
      var filter = $(this).val(),
        count = 0;

      // Loop through the comment list
      $('tbody tr').each(function() {


        // If the list item does not contain the text phrase fade it out
        if ($(this).text().search(new RegExp(filter, "i")) < 0) {
          $(this).hide();  // MY CHANGE

          // Show the list item if the phrase matches and increase the count by 1
        } else {
          $(this).show(); // MY CHANGE
          count++;
        }

      });

    });
    
    $('.vessel-link').attr('href').replace('www.shiplocation.com/vessels/', "portauthor.cf/vsl.php");
    
    $('a[href="www.shiplocation.com/vessels/"]').attr('href', 'portauthor.cf/vsl.php?');
</script>
   

</body>
</html>


