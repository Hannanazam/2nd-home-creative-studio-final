<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>2nd Home Creative Studio | Contact</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="../assest/animate.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" crossorigin="anonymous" />
  <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
  <?php require_once('index.php'); ?> 
</head>

<body>


  <script>
    function alertWarning(){
      $(document).ready(function(){
          // $('.alert-warning').addClass("show");
          // $('.alert-warning').removeClass("hide");
          $('.alert-warning').addClass("showAlert");
          // setTimeout(function(){
          //   $('.alert-warning').removeClass("show");
          //   $('.alert-warning').addClass("hide");
          // },5000);
      });
      }
    function alertSuccess(){
      $(document).ready(function(){
          // $('.alert-success').removeClass("hide");
          $('.alert-success').addClass("showAlert");
            //  $('.alert-success').addClass("show");
          // setTimeout(function(){
          //   $('.alert-success').removeClass("show");
          //   $('.alert-success').addClass("hide");
          // },5000);
      });
  
      }
  </script>




<?php
if(isset($_POST["send"])){
  $Name="User Name : ".$_POST["name"]."\n";
  $Subject= " Subject : Message"."\n";
  $Email=" User Email : ".$_POST["email"]."\n";
  $Message=" User Message : ".$_POST["message"];


  $from = "hello@2ndhomepk.com";
  
  $Message = $Name .' '.$Subject.' '.$Email.''.$Message;
  
  $to = "hello@2ndhomepk.com";
  $headers = "From:" . $from;
    
    if($Name !="" && $Subject !="" && $Email !="" && $Message !="")
    {
        if(mail($to,$Subject,$Message,$headers))
  {
    
    echo '<script type="text/javascript">alertSuccess() </script>';
      
     
   
  }
  else
  { 
      echo '<script type="text/javascript">alertWarning() </script>';
  
  }
}
  }
?>






  <!-- navbar  -->
  <section id="header">
    <div class="container-fluid wow fadeInDown">
      <nav class="navbar navbar-dark">
        <div class="container-fluid">
          <button class="navbar-toggler shadow-none ms-auto" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <i class="fal fa-bars"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-item1 text-end ms-auto mb-2 mb-lg-0">
              <li class="nav-item nav-item1">
                <a class="nav-link active" aria-current="page" href="../index.html">Home</a>
              </li>
              <li class="nav-item nav-item2">
                <a class="nav-link" href="../story/index.html">Our Story</a>
              </li>
              <li class="nav-item nav-item3">
                <a class="nav-link" href="../work/index.html">Work</a>
              </li>
              <li class="nav-item nav-item4">
                <a class="nav-link" href="#">Clients</a>
              </li>
              <li class="nav-item nav-item5">
                <a class="nav-link" href="#">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </section>
  <!-- navbar  -->

  <!-- home  -->
  <section id="homestory">
    <div class="mainlogo1">
      <center>
        <img src="../assest/logowhite.png" class="img-fluid p-4" width="400" alt="">
      </center>
    </div>
  </section>
  <!-- home  -->

  <!-- mainheading -->
  <section id="mainheading">
    <div class="container">
      <div class="setwidth wow fadeInLeft">
        <h1>LETS GET IN TOUCH</h1>
        <form method="POST">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12">
              <input type="text" name="name" id="exampleFormControlInput1" class="form-control shadow-none" placeholder="WHAT IS YOUR NAME?">
              <input type="text" name="message" id="exampleFormControlInput2" class="form-control shadow-none" placeholder="HOW CAN WE HELP YOU?">
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
              <input type="email" name="email" id="exampleFormControlInput3" class="form-control setmargin shadow-none" placeholder="YOUR EMAIL?">
              <!--<button type="submit" name="send" id="sendbutton" class="btn btn-outline-dark shadow-none">SEND</button>-->

            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="project hideonmedium">
                <p><strong>hello@secondhomepk.com</strong> <br><span>Have a project in mind? Need a
                    wise advice? Want to say hi? We
                    are excited to talk to you.</span></p>
              </div>
            </div>
          </div>
          <button type="submit" name="send" id="sendbutton" class="btn btn-outline-dark shadow-none">SEND</button>
<div class="col-lg-4 col-md-4 col-sm-12">
              <div class="project showonmedium">
                <p><strong>hello@secondhomepk.com</strong> <br><span>Have a project in mind? Need a
                    wise advice? Want to say hi? We
                    are excited to talk to you.</span></p>
              </div>
            </div>
        </div>
        </form>
      </div>
    </div>
  </section>
  <!-- mainheading -->



  <!-- footer -->
  <section id="footer">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12">
          <div class="borderright">
            <img src="../assest/logowhite.png" width="200" class="img-fluid" alt="">
            <div class="socialicon">
              <a href="#">
                <i class="fab fa-whatsapp"></i>
              </a>
              <a href="#">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="https://www.facebook.com/2ndHomeCS/" target="blank">
                <i class="fab fa-facebook"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-12">
          <div class="project">
            <p><strong>hello@secondhomepk.com</strong> <br><span>Have a project in mind? Need a
                wise advice? Want to say hi? We
                are excited to talk to you.</span></p>
          </div>
          <p class="absoluteposition">
            copyrights secondhomecreative2021
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- footer -->


<!-- alerts  -->

<div class="alertsss">

  <div class="alert hide alert-success alert-dismissible fade show" role="alert">
  <i class="fas fa-check-circle"></i>
<strong>Congratulation!</strong> Your message has been submitted we will contact you soon.
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

  <div class="alert hide alert-warning alert-dismissible fade show" role="alert">
  <i class="fas fa-exclamation-circle"></i>
<strong>Oops!</strong> Message not send poor connection.
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
  

</div>

<!-- alerts  -->












<script>
  let input1 = document.querySelector("#exampleFormControlInput1");
  let input2 = document.querySelector("#exampleFormControlInput2");
  let input3 = document.querySelector("#exampleFormControlInput3");
let button = document.querySelector("#sendbutton");

button.disabled = true;

input1.addEventListener("change", stateHandle);
input2.addEventListener("change", stateHandle);
input3.addEventListener("change", stateHandle);

function stateHandle() {
	if (document.querySelector("#exampleFormControlInput1").value === "" || document.querySelector("#exampleFormControlInput2").value === "" || document.querySelector("#exampleFormControlInput3").value === "") {
		button.disabled = true;
	} else {
		button.disabled = false;
	}
}

</script>
  <script src="../assest/wow.min.js"></script>
  <script>
    new WOW().init();
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>