<?php
require_once 'Product.php';
require_once 'Book.php';
require_once 'Gift.php';
require_once 'BabyCar.php';
// object from book 
//two object from baby car
$books= new Book();
$books->setpublisher();
$books->choosepublisher();
$books->name="Hayat";
$books->price=150;
$books->description="kayal Elmy";
$books->uploadimage();;
$books->writer="omar";
$books->color="Red";
$books->showallpublisher();
// $books->printPublishersList();



//onather object from book
$books2= new Book();

$books2->setpublisher();
$books2->choosepublisher();
$books2->name="Hppiness";
$books2->price=200;
$books2->description="psychology Book";
$books2->uploadimage();
$books2->writer="Daniel Gilbert";
$books2->color="brown";
$books2->showallpublisher();

//object from BabyCar
$babycars= new BabyCar;
$babycars->name="rolex";
$babycars->price=150;
$babycars-> calcprice();
$babycars->description="for baby ";
$babycars->uploadimage();
$babycars->age=6;
$babycars->weigth="10 kilo";
$babycars->displaymaterials();
$babycars->allspecialtax();
$babycars->getfinalprice();


//object from BabyCar
$babycars2= new BabyCar;
$babycars2->name="child";
$babycars2->price=140;
$babycars2-> calcprice();
$babycars2->description="7 years old";
$babycars2->uploadimage();
$babycars2->age=7;
$babycars2->weigth="40 kilo";
$babycars2->displaymaterials();
$babycars2->allspecialtax();
$babycars2->getfinalprice();




?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>product</h1>
    
   <h2>babyCar object</h2>
   <h5> <ul class="list-group list-group-flush">
   <h5> <li class="list-group-item"><?php echo  $babycars->name;?></li></h5>
   <h5> <li class="list-group-item"><?php echo $babycars->price; ?></li></h5>
   <h5><li class="list-group-item"><?php echo $babycars->description ;?></li></h5>
   <h5><li class="list-group-item"><?php echo$babycars->uploadimage(); ?></li></h5>
  <h5><li class="list-group-item"><?php echo $babycars->age ?></li></h5>
<h5><li class="list-group-item"><?php echo $babycars->weigth?></li></h5>
  <center><h3><li class="list-group-item"><?php echo $babycars->PrintMaterialList();?></li></h5></center>
  <h5> <li class="list-group-item"><?php echo $babycars->getfinalprice();?></li></h5>
</ul>
<h2>babyCar object</h2>
    <ul class="list-group list-group-flush">
    <h5><li class="list-group-item"><?php echo  $babycars2->name;?></li></h5>
    <h5> <li class="list-group-item"><?php echo $babycars2->price; ?></li></h5>
    <h5><li class="list-group-item"><?php echo $babycars2->description ;?></li></h5>
    <h5><li class="list-group-item"><?php echo$babycars2->uploadimage(); ?></li></h5>
    <h5><li class="list-group-item"><?php echo $babycars2->age ?></li></h5>
    <h5><li class="list-group-item"><?php echo $babycars2->weigth?></li></h5>
    <h5><li class="list-group-item"><?php echo $babycars2->getfinalprice();?></li></h5>
</ul>
<h2>book object</h2>
    <ul class="list-group list-group-flush">
    <h5><li class="list-group-item"><?php echo  $books->name;?></li></h5>
    <h5><li class="list-group-item"><?php echo $books->price; ?></li></h5>
    <h5><li class="list-group-item"><?php echo$books->description ;?></li></h5>
    <h5><li class="list-group-item"><?php echo$books->uploadimage(); ?></li></h5>
    <h5><li class="list-group-item"><?php echo$books->color ;  ?></li></h5>
    <h5><li class="list-group-item"><?php echo$books->choosepublisher();?></li></h5>
  <center><h5><li class="list-group-item"><?php echo$books->printPublishersList();?></li></h5></center>
 
</ul>
<h2>Book object</h2>
    <ul class="list-group list-group-flush">
 <h5> <li class="list-group-item"><?php echo  $books2->name;?></li></h5>
 <h5> <li class="list-group-item"><?php echo $books2->price; ?></li></h5>
 <h5><li class="list-group-item"><?php echo$books2->description ;?></li></h5>
 <h5><li class="list-group-item"><?php echo$books2->uploadimage(); ?></li></h5>
 <h5><li class="list-group-item"><?php echo$books2->color ;  ?></li></h5>
 <h5><li class="list-group-item"><?php echo$books2->choosepublisher();?></li></h5>
 
</ul>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>