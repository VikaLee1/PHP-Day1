
<?php 
$name="James";
$last_name="Bond";
$age= 36;
$job_title= "MI6 agent";
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic PHP exercises</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   
    <?php 
    $sentence="Hi, my name is " .$name. " " .$last_name. ". I'm " .$age. " years old, and I work as a " .$job_title. "<br/>"  ;
    echo $sentence;

    $names = array("Mark", "John", "Lisa");
    echo "The third player in the team is " .$names[2]. "<br/>"


    ?>
    
  
</body>
</html>