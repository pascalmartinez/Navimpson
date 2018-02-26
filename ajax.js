function dirname(path) {
    return path.replace(/\\/g,'/').replace(/\/[^\/]*$/, '');
}

//Evite de pouvoir remonter au dessus de "/home"
function unback(){
  if($('#chemin').val()=='/home'){
    $('#back').prop('disabled', true);
  }
  else{
    $('#back').prop('disabled', false);
  }
}

function clickup(){
  var rep = $("#chemin").val();
  var repup = dirname(rep);
  $("#chemin").val(repup);
  $.ajax({ url: 'fonction1.php',
           data: {action: repup},
           type: 'post',
           success: function(output) {
                        $("#arbo").html(output);
                        var chemin = $("#chemin").val();
                        unback();

                        $('.clique').click(function(){
                          var foldername = $(this).text();
                          loadDir(repup + '/' + foldername);
                        });
                    }
  });
}

//Arbo
function loadDir(rep) {
  $("#chemin").val(rep);
  $.ajax({ url: 'fonction1.php',
           data: {action: rep},
           type: 'post',
           success: function(output) {
                        unback();
                        $("#arbo").html(output);
                        var chemin = $("#chemin").val();
                        $('.clique').click(function(){
                          new Audio('sound/maggie.mp3').play();
                          var foldername = $(this).text();
                          loadDir(rep + '/' + foldername);
                        });
                    }
  });
}
//Affiche l'heure dans le footer (BuG)
/*function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      $("#date").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("POST", "fonction1.php", true);
  xhttp.send();
}*/

$(document).ready(function(){
  new Audio('sound/intro.mp3').play();
  $("#back").click(clickup);
  loadDir('/home');
  loadDoc();
  $('#chemin').change(function() {
    loadDir($("#chemin").val());
  });
});
