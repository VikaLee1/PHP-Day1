    <?php
$caracters = array(
"Donuld Duck"=>array 
(
    "name" => "Donuld Duck",
    "image" =>"https://cdn.pixabay.com/photo/2014/10/22/18/13/donald-duck-498512_1280.jpg"
),
"Mario"=>array
(
    "name"=>"Mario",
    "image"=>"https://cdn.pixabay.com/photo/2016/01/13/17/02/super-1138462__480.png"
)
);
    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative array</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>
<body>


<?php foreach($caracters as $caracter) : ?>
<div class="card" style="width: 18rem;">
  <img src="<?=$caracter['image'] ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?=$caracter['name']?></h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
<?php endforeach; ?>


<!-- bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>