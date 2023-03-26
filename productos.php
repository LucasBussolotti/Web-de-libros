<?php include ("template/navbar.php")?>

<?php 

include("admin/config/db.php");

$sentenciaSQL=$conexion->prepare("SELECT * FROM libros");
$sentenciaSQL->execute();
$listaLibros=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);


?>


<?php

foreach($listaLibros as $libro){ ?>
    
<div class="col-md-3">
    <div class="card my-2">
    <img class="card-img-top" src= "./img/<?php echo $libro['imagen'];?>">
        
        
    <div class="card-body">
    <h4 class="card-title"><?php echo $libro['nombre'];?></h4>
    <a name="" id="" class="btn btn-primary" target= "_blank" href="https://goalkicker.com/" role="button">Ver mas</a>
</div>
</div>
</div>



<?php }?>

<?php include ("template/footer.php")?>