<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  

    <link rel="apple-touch-icon" type="image/png" href="https://cpwebassets.codepen.io/assets/favicon/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png" />

    <meta name="apple-mobile-web-app-title" content="CodePen">

    <link rel="icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico" />

    <link rel="mask-icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/logo-pin-b4b4269c16397ad2f0f7a01bcdf513a1994f4c94b8af2f191c09eb0d601762b1.svg" color="#111" />



  
    <script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-2c7831bb44f98c1391d6a4ffda0e1fd302503391ca806e7fcc7b9b87197aec26.js"></script>


  <title>Testimonials</title>

    <link rel="canonical" href="https://codepen.io/Adhy/pen/dYegGK">
  
  
  <link rel='stylesheet' href='//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'>
  
<style>
body{
  font-family: 'Roboto Condensed', sans-serif;
  margin: 0px;
  padding: 0px;
}

.alcenter{text-align:center;}

#TestC{
  width:100%;
  height:400px;
}

.redz{
  width:100%;
  height:100%;
  position:absolute;
  z-index:1;
}

#TestC h1{
  margin-left:5%;
  padding-top:1%;
  color:#fff;
  -webkit-text-stroke: .1px gray;
}

.carousel-control{
    top: inherit;
    bottom: 30px;
    font-size: 35px;
    left: inherit;
    z-index:999;
    width:2%;
    margin-right:5%;
}

.carousel-control.left {
 background-image: none;
 filter: none;
 right: 45px;
}

.carousel-control.right {
    right: 0;
    left: auto;
    background-image: none;
     filter: none;
}

.quote-section{
  width:70%;
  margin:0 auto;
  position:relative;
  padding:20px;
  font-size:18px;
  margin-top:4%;
  border-radius:10px;
  color:#eee;
  background:rgba(128, 0, 255, 0.33);
}

#ql{
  padding:0px 15px 0px 15px;
}
#qr{padding:0px 15px 0px 15px;}

.autor-section{
  width:30%;
  margin:0 auto;
  margin-top:1%;
  color:#eee;
  font-size:16px;
  text-align:center;
  border-radius:5px;
  background:rgba(254, 109, 247, 0.28);
  padding:5px;
}
</style>

  <script>
  window.console = window.console || function(t) {};
</script>

  
  
</head>

<body translate="no">
  <div id="TestC" class="carousel slide" data-ride="carousel">
  <div class="redz">
  <h1>See what everyone is saying about us</></h1>
  <!--Contenedor slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <div class="quote-section">
        <i class="fa fa-quote-left" id="ql"></i> Creart Academy has completely transformed my skills. The instructors are amazing!"<i class="fa fa-quote-right" id="qr"></i>
      </div>
      <div class="autor-section">
          Student1 <i class="fa fa-user"></i> - Company/Location <i class="fa fa-building-o"></i>
      </div>
    </div>
    <div class="item">
      <div class="quote-section">
        <i class="fa fa-quote-left" id="ql"></i>"I loved the hands-on training. I feel confident starting my own beauty business!"<i class="fa fa-quote-right" id="qr"></i>
      </div>
      <div class="autor-section">
          Erik Rivera <i class="fa fa-user"></i> - DW Productions <i class="fa fa-building-o"></i>
      </div>
    </div>
    <div class="item">
      <div class="quote-section">
        <i class="fa fa-quote-left" id="ql"></i>"The courses are well-structured and easy to follow. Highly recommend!"<i class="fa fa-quote-right" id="qr"></i>
    
    </div>
      <div class="autor-section">
          Marisol Ochoa <i class="fa fa-user"></i> - Activo <i class="fa fa-building-o"></i>
      </div>
    </div>
    <div class="item">
      <div class="quote-section">
        <i class="fa fa-quote-left" id="ql"></i>"The instructors are very supportive and knowledgeable."<i class="fa fa-quote-right" id="qr"></i>
      </div>
      <div class="autor-section">
          Pablo López CEO & Co-founder <i class="fa fa-user"></i> - Ipixels <i class="fa fa-building-o"></i>
      </div>
    </div>
    </div>
  </div>
  <!--Fin Contenedor slides -->
  <!--Controles-->
  <a class="left carousel-control" href="#TestC" data-slide="prev">
    <i class="fa fa-chevron-circle-left"></i>
  </a>
  <a class="right carousel-control" href="#TestC" data-slide="next">
    <i class="fa fa-chevron-circle-right"></i>
  </a>
  <!--Fin Controles-->
</div>
<script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script>
<script id="rendered-js">
    $('.carousel').carousel({
        interval: 5000 // Set the interval to 5000ms (5 seconds)
    });
</script>

  
</body>

</html>
