<?php
function explo($chemin){

  $repertoire = opendir($chemin);
  $nomdefichier = readdir($repertoire);

  while($nomdefichier != false) {

    if($nomdefichier !='.' &&  $nomdefichier !='..'){
      echo '<div class="clique text-truncate animated bounceInRight';
        if(strpos($nomdefichier, ".") === 0){
          echo ' d-none';
        }
        if (is_dir($chemin.'/'.$nomdefichier)){
            echo ' folder"><img style="width="20" height="20"" src="img/file.png"/>';
        }
        else{
            echo ' file"><img style="width="20" height="20"" src="img/file2.png"/>';
        }
        echo $nomdefichier;
        echo '</div>';
    }
    $nomdefichier = readdir($repertoire);
  }
}

if (isset($_POST['action'])&&!empty($_POST['action'])) {
    $action=$_POST['action'];
    explo($action);
  }
?>
