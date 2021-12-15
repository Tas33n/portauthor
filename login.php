<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
      <title>Admin Login Panel</title>
      <link rel="icon" href="/icon.jpg">
      <!-- Bootstrap -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto&display=swap" rel="stylesheet">
      <script src="https://kit.fontawesome.com/3cc432bb58.js" crossorigin="anonymous"></script>
   </head>
   <style>
   img[src*="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"] {
display: none;}
          *{font-family: 'Roboto', sans-serif;}
      .signButton{
      background-color: #4d79f6;
      color: white !important;
      transition: 0.2s;
      border-radius: 25px;
      box-shadow: 3px 3px 16px -2px rgba(53,104,245,1);
      }
      .signButton:hover{
      backkground-color: #3567F5;
      transition: 0.2s;
      }
   </style>
   <body style="background-image: url(http://painel.cms-central.ovh/assets/images/bg.png)">
      <div class="container">
         <center style="margin-top: 15%;">
            <div class="row justify-content-center" align="center">
               <div class="col-md-5">
                  <div class="card" style="border-radius: 20px;border: 0.2px solid #3567F5;box-shadow: 3px 3px 16px -12px rgba(0,0,0,1);">
                     <div class="card-body">
                        <div class="imageHeader" style="width: 80px;">
                           <img src="https://avatars.githubusercontent.com/u/55633040?v=4" style="width: 75px;border: 3px solid #F1F4FA;border-radius: 50%;margin-top: -68%;padding: 0.2em;background-color: white !important;">
                        </div>
                       <br>
                        <h4 style="color: #5064B6;font-weight: 600;">Admin Login Panel</h4>
                        <small style="color: red !important;">Note : Only Admin Can Log-In</small>
                        <br>
                        <div class="row">
                          
                           <div class="col-md-12">
                             <br>
                              <label style="color: #798FBE;font-size: 13px;float: left;margin-top: 3%;">Username</label>
                              <div class="input-group mt-3">
                                 <input type="text" class="form-control" placeholder="Username"  aria-describedby="basic-addon2" style="font-size: 13px;">
                                 <div class="input-group-append" >
                                    <span class="input-group-text" id="basic-addon2" style="font-size: 13px;"><i class="far fa-user"></i></span>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-12">
                              <label style="color: #798FBE;font-size: 13px;float: left;margin-top: 3%;">Password</label>
                              <div class="input-group mt-3">
                                 <input type="password" class="form-control" placeholder="Password"  aria-describedby="basic-addon2" style="font-size: 13px;">
                                 <div class="input-group-append" >
                                    <span class="input-group-text" id="basic-addon2" style="font-size: 13px;"><i class="fas fa-lock"></i></span>
                                 </div>
                              </div>
                           </div>
                           <div class="custom-control custom-switch mt-4 ml-3" style="display: left;">
                              <input type="checkbox" class="custom-control-input" id="customSwitches">
                              <label style="cursor: pointer;" class="custom-control-label" for="customSwitches"><span style="font-size: 14px;color: #a4abc5 !important;">Remember me</span></label>
                           </div>
                           <small id="err" style="color: red !important; display: none;">Intruder Detected. Wrong Credential</small>
                           <div class="col-md-12 mt-4 ">
                              <button id="login" class="btn btn-block signButton" onkeypress="showdiv()">
                              Log in <i class="fas fa-sign-in-alt"></i>
                              </button>
                             <br>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </center>
      </div>
      <br><br><br><br><br>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
$('#login').click(function() {
    $('#err').css({
        'display': 'block'
    });
});
</script>
   </body>
</html>