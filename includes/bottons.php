!
<?php


$pagina = $_GET['pagina'];

echo "we zitten op de pagia: $pagina<br>";

?>
<div>
<h1>incude oefeling</h1>
              <div class="imgs">
                   <a href="?pagina=camer" style="<?php if($_GET['pagina']=='camer')echo 'border: 5px red solid' ?>"><img src="img/cameras_button.png" alt="Cameras" title="Cameras"> </a>
                   <a href="?pagina=koelkast" style="<?php if($_GET['pagina']=='koelkast')echo 'border: 5px red solid' ?>"><img src="img/koelkasten_button.png" alt="Koankasten" title="Koankasten"> </a>
                   <a href="?pagina=lamp" style="<?php if($_GET['pagina']=='lamp')echo 'border: 5px red solid' ?>"><img src="img/lampen_button.png" alt="Lampen" title="Lampen"> </a>
                   <a href="?pagina=stereo" style="<?php if($_GET['pagina']=='stereo')echo 'border: 5px red solid' ?>"><img src="img/stereo_button.png" alt="Stereo" title="Stereo"> </a>
                   <a href="?pagina=wasmachines" style="<?php if($_GET['pagina']=='wasmachines')echo 'border: 5px red solid' ?>"><img src="img/wasmachines_button.png" alt="Stereo" title="Stereo"> </a>
                   <a href="?pagina=home" style="<?php if($_GET['pagina']=='home')echo 'border: 5px red solid' ?>"><img src="img/home.png" alt="Home" title="home"> </a>
              </div>