<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<section>
  <?php 
        $nm = $_GET['name'];
        $pic= $_GET['filename'];
        $br = $_GET['breed'];
        $bir =$_GET['birthday'];
        $gender= $_GET['pet-gender'];
        $Sp_Ne=$_GET['spayed-neutered'];
        echo "<h2>Successfully Submitte Name: " .$_GET['name']."</h2>" ;
        echo "<h3>Successfully Submitted FileName: " .$_GET['filename']."</h3>" ;
        echo "<h3>Successfully Submitted Breed type: " .$_GET['breed']."</h3>" ;
        echo "<h3>Successfully Submitted Birthdate:  " .$_GET['birthday']."</h3>" ;
        echo "<h3>Successfully Submitted Gender: " .$_GET['pet-gender']."</h3>" ;
        echo "<h3>Successfully Submitted Spayed or Neutered: " .$_GET['spayed-neutered']."</h3>" ;
  ?>
</section>
    
</body>
</html>