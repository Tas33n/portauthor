<?php

require_once './simple_html_dom.php';
$html = new simple_html_dom();

    $url = "http://cpatos.gov.bd/ctmsdashboard/index.php";

    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    $headers = array(
        "Referer: http://cpatos.gov.bd/",
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
    $tables = $html->find('div[class=row]');
    $table = $tables[0];
    $table2 = $tables[1];
    $table3 = $tables[2];
    //echo $table;

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
      }
#cont,#more,#vasel {
    border-radius: 8px;
    background: rgba(0,0,0,0.5);
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
h4{
    background: black;
}
marquee{
        margin-top: 61px;

}
.nav-item a:hover,.active a{
    color: white !important;
    text-shadow: 1px 1px #4300ff;
}
    </style>
    <style>
			.row {
			  width: 100%;
			  margin: 0 auto;
			  padding-left:25px;
			  padding-right:25px;
			}
			.block {			  
			  float: left;
			  border: 3px solid #00ffff;
			  border-radius: 15px;
			  padding:3px;
			  margin:5px;
			  margin: auto;
			      TEXT-SHADOW: 1PX 1PX #1800ab;
			  font-family: "Calibri";
			  margin-bottom: 5px;
			}
			
			.block:hover {
			        background: rgba(0,0,0,0.5);
			}


            .clearfix:after {
                content: " "; /* Older browser do not support empty content */
                visibility: hidden;
                display: block;
                height: 0;
                clear: both;
            }

            .hr {
                border-top:2px dotted #000;
                /*Rest of stuff here*/
            }
			
			/* Smartphones (portrait and landscape) ----------- */
			@media only screen and (min-device-width : 320px) and (max-device-width : 480px) {
				/*[class*="block"] {
					width: 50%;
				}*/
			}

			/* Smartphones (landscape) ----------- */
			@media only screen and (min-width : 321px) {
				
			}

			/* Smartphones (portrait) ----------- */
			@media only screen and (max-width : 320px) {
				
			}

			/* iPads (portrait and landscape) ----------- */
			@media only screen and (min-device-width : 768px) 
			and (max-device-width : 1024px) {
				
			}

			/* iPads (landscape) ----------- */
			@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : landscape) {
				
			}

			/* iPads (portrait) ----------- */
			@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) 
			and (orientation : portrait) {
				
			}

			/* Desktops and laptops ----------- */
			@media only screen and (min-width : 1224px) {
				
			}

			/* Large screens ----------- */
			@media only screen and (min-width : 1824px) {
				
			}

			/* iPhone 4 ----------- */
			@media only screen and (-webkit-min-device-pixel-ratio : 1.5),only screen and (min-device-pixel-ratio : 1.5) {
				
			}
		 </style>
		 
		 <style>
		 .block{
		     width: 95%;
		 }
		     @media only screen and (min-width: 600px) {
  /* For tablets: */
  
}
@media only screen and (min-width: 768px) {
  /* For desktop: */
  .block{
		     width: 31%;
		 }
}
		 </style>
</head>
<body class="container">
    
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark" style="
    background: black !important;
">
  <a class="navbar-brand" href="#" style="font-size: 28px;
    line-height: 0;"><img src="/icon.jpg" style="height: 35px; padding: 0;"> PortAuthor</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="/index.php">Home</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/ctms.php">CTMS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto" style="
    margin-left: auto; text-align: right;
">
      <li class="nav-item">
        <a class="nav-link" href="https://github.com/tas33n">made by Sohag</a>
      </li>
    </ul>
  </div>
</nav>
    
    <marquee><h2 style="
    /* font-size: 72px; */
    background: -webkit-linear-gradient(#eee, #333);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
">CONTAINER TERMINAL MANAGEMENT SYSTEM(CTMS)</h2></marquee>
    
    <div id="vasel">
        <h4 class="text-center mt-3">CURRENTLY WORKING VESSEL</h4>
        
        <div class="overflow-auto vsl" style="
    overflow: scroll;
    margin-top: 20px;
">
            <?php echo $table; ?>
        </div>
    </div>
    
     <div id="vasel">
        <h4 class="text-center mt-3">INCOMING VESSEL</h4>
        
        <div class="overflow-auto vsl" style="
    overflow: scroll;
    margin-top: 20px;
">
            <?php echo $table2; ?>
        </div>
    </div>
    
    
        
     <div id="vasel">
        <h4 class="text-center mt-3">OUTGOING VESSEL</h4>
        
        <div class="overflow-auto vsl" style="
    overflow: scroll;
    margin-top: 20px;
">
            <?php echo $table3; ?>
        </div>
    </div>
    

    <!-- Optional JavaScript; choose one of the two! -->
    
    <!-- Option 1: Bootstrap Bundle with Popper -->
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script src="./script.js"></script>
    <script>
$('#locationId').click(function() {
    $('#iframe').css({
        'display': 'block'
    });
});
</script>
   

</body>
</html>


