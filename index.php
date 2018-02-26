<!DOCTYPE html>
<html>

 <head>
   <script type="text/javascript" src="Librairie/jquery.js"></script>
   <script type="text/javascript" src="ajax.js"></script>
   <link rel="stylesheet" href="Librairie/bootstrap.min.css">
   <link rel="stylesheet" href="Librairie/animate.min.css">
   <link rel="stylesheet" href="css/style.css">
   <link href="//db.onlinewebfonts.com/c/2866ff2446c507a76a1e43ccf8880134?family=Simpsonfont" rel="stylesheet" type="text/css"
   <meta charset="utf-8">
   <title>Index Commun</title>
 </head>

 <body>

    <h1 class="text-center animated fadeIn">NAVIMPSON</h1>

        <div id="top" class="container-fluid animated bounceInLeft">
          <div class="container">
            <div class="row">
              <input class="col-sm-12 col-md-8 col-lg-8" id="chemin"  type="text">
              <button href="#" id="back" onclick="doh()" class="btn btn-primary btn-primary col-sm-12 col-md-3 offset-lg-1 col-lg-3">
              Retour</button>
            </div>
          </div>
        </div>

    <div class="container-fluid">
  		<div id="arbo" class="col-sm-12 offset-md-2 col-md-8 offset-lg-3 col-lg-6"></div>
    </div>

    <footer class="container fixed-bottom col-12" >
   	  <div id="date" class='text-center'>
        <?php
          $date = date("d-m-Y");
          $heure=date('H:i');
          echo " Nous sommes le $date et il est $heure";
        ?>
      </div>
    </footer>

    <script>
    function doh(){
      new Audio('sound/Doh.mp3').play();
    }
    </script>
  </body>
</html>
